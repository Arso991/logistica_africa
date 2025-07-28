<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    //
    public function index(Request $request)
    {
        try {

            $cart = session()->get('cart', []);

            if (!$cart) {
                return redirect()->route('view.boutique')->with('error', 'Vous n\'avez aucun produit dans votre panier. Veuillez ajouter ici.');
            }

            return view('apps.pages.cart', compact('cart'));
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

            $product = Product::where('id', $productId)->firstOrFail();

            if ($product) {
                if (isset($cart[$productId])) {
                    $qty ? $cart[$productId]['qty'] += $qty : $cart[$productId]['qty']++;
                } else {
                    $cart[$productId] = [
                        'qty' => $qty ?? 1,
                        'total' => $product['sale_price'],
                        'product' => $product
                    ];
                }

                $cart[$productId]['total'] = $cart[$productId]['qty'] * $product['sale_price'];

                session()->put(
                    'cart',
                    $cart
                );

                return redirect()->back()->with('success', 'Produit ajouté au panier !');
            }

            return redirect()->back()->with('error', 'Product non existant !');
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

            return redirect()->back()->with('success', 'Produit supprimé du panier avec succès !');
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
                    $cart[$productId]['total'] = $cart[$productId]['qty'] * $cart[$productId]['product']['sale_price'];
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
                $cart[$productId]['total'] = $cart[$productId]['qty'] * $cart[$productId]['product']['sale_price'];
            }

            session()->put('cart', $cart); // Mettre à jour le panier dans la session

            return redirect()->back()->with('success', 'Quantité augmentée avec succès');
        } catch (\Exception $e) {
            Log::error('Erreur lors de la mise à jour : ' . $e->getMessage());
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la mise à jour. Veuillez reéssayer.');
        }
    }

    public function cartsave(Request $request)
    {
        try {
            if (!Auth::user()) {
                return redirect()->route('auth.login')->with('error', 'Vous devez vous connecter avant de procéder au paiement.');
            }

            if (!Auth::user()->role == 'customer') {
                return redirect()->route('auth.login')->with('error', 'Vous devez vous connecter à votre compte client.');
            }

            if (!empty(request('transaction-status')) && request('transaction-status') == 'approved') {
                $cart = session()->get('cart') ?? [];

                $order = Order::create([
                    "order_no" => $this->generateCode(),
                    "status" => true,
                    "transaction_id" => request('transaction-id'),
                    'price' => array_sum(array_column($cart, 'total')),
                    "user_id" => Auth::user()->id
                ]);

                foreach ($cart as $item) {
                    CartItem::create([
                        'order_no' => $order['order_no'],
                        'product_id' => $item['product']['id'],
                        'quantity' => $item['qty'],
                        "user_id" => Auth::user()->id,
                        'session_id' => session()->getId(),
                    ]);
                }

                session()->forget('cart');

                return redirect()->route('transactions.history')->with('success', 'Commande effectuée avec succès !');
            } else {
                return redirect()->route('transactions.history')->with('error', 'Commande non effectuée. Veuillez procéder au paiement.');
            }
        } catch (\Exception $e) {
            Log::error('Erreur lors de la sauvegarde : ' . $e->getMessage());
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la sauvegarde du panier. Veuillez reéssayer.');
        }
    }

    function generateCode()
    {
        try {
            do {
                $orderNo = "UST_" . generateOTP(8);
            } while ($this->otpExists($orderNo));

            return $orderNo;
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    function otpExists($orderNo)
    {
        return Order::where('order_no', $orderNo)->exists();
    }
}
