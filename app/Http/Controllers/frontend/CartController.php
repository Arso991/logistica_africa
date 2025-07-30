<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\EmailDevis;
use App\Models\CartItem;
use App\Models\Machine;
use App\Models\OrderDevis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CartController extends Controller
{
    //
    public function index(Request $request)
    {
        try {

            $cart = session()->get('cart', []);

            /* if (!$cart) {
                return redirect()->route('view.boutique')->with('error', 'Vous n\'avez aucun produit dans votre panier. Veuillez ajouter ici.');
            } */

            return view('apps.pages.frontend.devis', compact('cart'));
        } catch (\Exception $e) {
            Log::error('Erreur lors de l\'ouverture du panier : ' . $e->getMessage());
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'ouverture du panier. Veuillez reéssayer.');
        }
    }

    public function add(Request $request)
    {
        $productId = $request->product_id;

        $qty = $request->qty;

        try {
            //code...

            $cart = session()->get('cart', []);

            $product = Machine::where('id', $productId)->firstOrFail();

            if ($product) {
                if (isset($cart[$productId])) {
                    $qty ? $cart[$productId]['qty'] += $qty : $cart[$productId]['qty']++;
                } else {
                    $cart[$productId] = [
                        'qty' => $qty ?? 1,
                        'total' => $product['price'],
                        'product' => $product
                    ];
                }

                $cart[$productId]['total'] = $cart[$productId]['qty'] * $product['price'];

                session()->put(
                    'cart',
                    $cart
                );

                //return redirect()->back()->with('success', 'Engins ajouté pour une demande de devis !');
                return redirect()->route('view.devis')->with('success', 'Engins ajouté pour une demande de devis !');
            }

            return redirect()->back()->with('error', 'Engins non existant !');
        } catch (\Exception $e) {
            Log::error('Erreur lors de l\'ajout : ' . $e->getMessage());
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'ajout au panier. Veuillez reéssayer.');
        }
    }

    public function remove(Request $request)
    {
        $productId = $request->product_id;

        try {
            //code...
            $cart = session()->get('cart', []);
            if (isset($cart[$productId])) {
                unset($cart[$productId]);
            }

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Machine supprimé du panier avec succès !');
        } catch (\Exception $e) {
            Log::error('Erreur lors de la suppression : ' . $e->getMessage());
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la suppression. Veuillez reéssayer.');
        }
    }

    public function decreaseQuantity(Request $request)
    {
        $productId = $request->input('product_id');
        $cart = session()->get('cart', []);

        try {
            //code...
            // Si le produit existe dans le panier
            if (isset($cart[$productId])) {
                if ($cart[$productId]['qty'] > 1) {
                    $cart[$productId]['qty']--;
                    $cart[$productId]['total'] = $cart[$productId]['qty'] * $cart[$productId]['product']['price'];
                } else {
                    // Si la quantité est 1, on retire le produit du panier
                    unset($cart[$productId]);
                    return redirect()->back()->with('success', 'Produit retiré du panier avec succès !');
                }
            }

            session()->put('cart', $cart); // Mettre à jour le panier dans la session

            return redirect()->back()->with('success', 'Quantité diminuée avec succès');
        } catch (\Exception $e) {
            Log::error('Erreur lors de la mise à jour : ' . $e->getMessage());
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la mise à jour. Veuillez reéssayer.');
        }
    }

    public function increaseQuantity(Request $request)
    {
        $productId = $request->input('product_id');
        $cart = session()->get('cart', []);
        try {
            //code...
            // Si le produit existe dans le panier, on incrémente la quantité
            if (isset($cart[$productId])) {
                $cart[$productId]['qty']++;
                $cart[$productId]['total'] = $cart[$productId]['qty'] * $cart[$productId]['product']['price'];
            }

            session()->put('cart', $cart); // Mettre à jour le panier dans la session

            return redirect()->route('view.devis')->with('success', 'Quantité augmentée avec succès');
        } catch (\Exception $e) {
            Log::error('Erreur lors de la mise à jour : ' . $e->getMessage());
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la mise à jour. Veuillez reéssayer.');
        }
    }

    public function cartsave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'client_firstname' => ['required', 'string', 'max:255'],
            'client_lastname'  => ['required', 'string', 'max:255'],
            'client_email'     => ['required', 'email', 'max:255'],
            'client_phone'     => ['nullable', 'string', 'max:20'],
            'client_company'   => ['nullable', 'string', 'max:255'],
            'client_role'      => ['nullable', 'string', 'max:255'],
            'motif'            => ['nullable', 'string'],
        ], [
            'client_firstname.required' => 'Le prénom est requis.',
            'client_lastname.required'  => 'Le nom est requis.',
            'client_email.required'     => 'L\'adresse email est requise.',
            'client_email.email'        => 'L\'adresse email est invalide.',
        ]);

        if ($validator->fails()) {
            $firstErrorMessage = $validator->errors()->first();
            return redirect()->back()
                ->with('error', $firstErrorMessage);
        }

        try {

            $cart = session()->get('cart') ?? [];

            $mailData = [
                'client_lastname' => Str::title($request->client_lastname),
                'client_firstname' => Str::title($request->client_firstname),
                'client_email' => $request->client_email,
                'client_phone' => $request->client_phone,
                'client_company' => $request->client_company,
                'client_role' => $request->client_role,
                'cart' => $cart,
                'ip' => $request->ip(),
            ];

            Mail::to('kksmartcom.bj@gmail.com')->send(new EmailDevis($mailData));

            //dd($this->generateCode());

            $order = OrderDevis::create([
                "devis_no" => $this->generateCode(),
                "status" => true,
                'price' => array_sum(array_column($cart, 'total')),
                'client_lastname' => Str::title($request->client_lastname),
                'client_firstname' => Str::title($request->client_firstname),
                'client_email' => $request->client_email,
                'client_phone' => $request->client_phone,
                'client_company' => $request->client_company,
                'client_role' => $request->client_role,
                'motif' => $request->motif,
            ]);

            foreach ($cart as $item) {
                CartItem::create([
                    'devis_no' => $order['devis_no'],
                    'machine_id' => $item['product']['id'],
                    'quantity' => $item['qty'],
                    'session_id' => session()->getId(),
                ]);
            }

            session()->forget('cart');

            return redirect()->route('view.congrats')->with('success', 'Votre demande de devis à été enrégistré avec succès !');
        } catch (\Exception $e) {
            dd($e);
            Log::error('Erreur lors de la sauvegarde : ' . $e->getMessage());
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la sauvegarde du panier. Veuillez reéssayer.');
        }
    }

    function generateCode()
    {
        try {
            do {
                $orderNo = "LOGISTICA_" . generateOTP(8);
            } while ($this->otpExists($orderNo));

            return $orderNo;
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    function otpExists($orderNo)
    {
        return OrderDevis::where('devis_no', $orderNo)->exists();
    }
}
