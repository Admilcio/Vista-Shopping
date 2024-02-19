<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::instance('cart')->content();
        return view('cart', ['cartItem' => $cart]);
    }

    public function addToCart(Request $request)
    {
        $product = Product::find($request->id);
        $price = $product->sale_price ?? $product->regular_price;
        Cart::instance('cart')->add($product->id, $product->name, $request->quantity, $price)->associate('App\Models\Product');
        return redirect()->back()->with('success', 'Product added to cart successfully');
    }

    public function updateCart(Request $request)
    {
        Cart::instance('cart')->update($request->rowId, $request->quantity);
        return redirect()->back()->with('success', 'Cart updated successfully');
    }

    public function removeItem(Request $request)
    {
        Cart::instance('cart')->remove($request->rowId);
        return redirect()->back()->with('success', 'Item removed from cart successfully');
    }

    public function clearCart()
    {
        Cart::instance('cart')->destroy();
        return redirect()->back()->with('success', 'Cart cleared successfully');
    }
}
