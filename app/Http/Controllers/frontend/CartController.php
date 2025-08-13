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
                    return redirect()->back();
                }
            }

            session()->put('cart', $cart); // Mettre à jour le panier dans la session

            return redirect()->back();
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

            return redirect()->route('view.devis');
        } catch (\Exception $e) {
            Log::error('Erreur lors de la mise à jour : ' . $e->getMessage());
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la mise à jour. Veuillez reéssayer.');
        }
    }

    public function cartsave(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'company_name' => ['required', 'string', 'max:255'],
            'representative_name' => ['required', 'string', 'max:255'],
            'usage_location' => ['required', 'string', 'max:255'],
            'usage_duration' => ['required', 'integer', 'min:1'],
            'email' => ['required', 'email', 'max:255'],
            'gsm_number' => ['required', 'string', 'regex:/^\+?[0-9]{6,15}$/'],
            'whatsapp_number' => ['nullable', 'string', 'regex:/^\+?[0-9]{6,15}$/'],
            'mobilization_date' => ['required', 'date'],
            'additional_details' => ['nullable', 'string', 'max:1000'],
        ], [
            'company_name.required' => 'Le nom de l\'entreprise est obligatoire.',

            'representative_name.required' => 'Le nom du représentant est obligatoire.',

            'usage_duration.required' => 'La durée de location est obligatoire.',
            'usage_duration.integer' => 'La durée doit être un nombre entier.',
            'usage_duration.min' => 'La durée doit être au moins de 1 jour.',

            'usage_location.required' => 'Le lieu d\'utilisation de(s) l\'engin(s) est obligatoire.',

            'email.required' => 'L\'adresse email est obligatoire.',
            'email.email' => 'Veuillez entrer une adresse email valide.',

            'gsm_number.required' => 'Le contact GSM est obligatoire.',
            'gsm_number.regex' => 'Veuillez entrer un numéro GSM valide avec l\'indicatif.',

            'whatsapp_number.regex' => 'Veuillez entrer un numéro WhatsApp valide avec l\'indicatif.',

            'mobilization_date.required' => 'La date de mobilisation souhaitée est obligatoire.',
            'mobilization_date.date' => 'Veuillez entrer une date valide.',
        ]);

        if ($validator->fails()) {
            $firstErrorMessage = $validator->errors()->first();
            return redirect()->back()
                ->with('error', $firstErrorMessage);
        }

        try {

            $cart = session()->get('cart') ?? [];

            $mailData = [
                'company_name' => Str::title($request->company_name),
                'representative_name' => Str::title($request->representative_name),
                'usage_duration' => $request->usage_duration,
                'email' => $request->email,
                "usage_location" => $request->usage_location,
                'gsm_number' => $request->gsm_number,
                'whatsapp_number' => $request->whatsapp_number,
                'mobilization_date' => $request->mobilization_date,
                'cart' => $cart,
                'ip' => $request->ip(),
            ];

            Mail::to('kksmartcom.bj@gmail.com')->send(new EmailDevis($mailData));

            //dd($this->generateCode());

            $order = OrderDevis::create([
                "devis_no" => $this->generateCode(),
                "status" => true,
                'price' => array_sum(array_column($cart, 'total')),
                'company_name' => Str::title($request->company_name),
                'representative_name' => Str::title($request->representative_name),
                'usage_duration' => $request->usage_duration,
                'usage_location' => $request->usage_location,
                'email' => $request->email,
                'gsm_number' => $request->gsm_number,
                'whatsapp_number' => $request->whatsapp_number,
                'mobilization_date' => $request->mobilization_date,
                'additional_details' => $request->additional_details,
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
