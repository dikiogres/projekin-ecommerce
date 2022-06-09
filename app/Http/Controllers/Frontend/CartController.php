<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Auth;
// use App\Models\Wishlist;
use Carbon\Carbon;

// use App\Models\Coupon;
use Illuminate\Support\Facades\Session;

// use App\Models\ShipDivision;

class CartController extends Controller
{
    public function index()
    {
        return view('frontend.cart');
    }
    public function AddToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        if ($product->discount_price == NULL) {
            Cart::add([
                'id' => $id,
                'name' => $request->product_name,
                'price' => $product->selling_price,
                'weight' => 1,
                'options' => [
                    'image' => $product->product_thumbnail,
                ],
            ]);

            return response()->json(['success' => 'Successfully Added on Your Cart']);
        } else {

            Cart::add([
                'id' => $id,
                'name' => $request->product_name,
                'price' => $product->discount_price,
                'weight' => 1,
                'options' => [
                    'image' => $product->product_thumbnail,
                ],
            ]);
            return response()->json(['success' => 'Successfully Added on Your Cart']);
        }
    } // end mehtod 


    // Mini Cart Section
    public function AddMiniCart()
    {
        $carts = Cart::content();
        $cartTotal = Cart::total();

        return response()->json(array(
            'carts' => $carts,
            'cartTotal' => round($cartTotal),
        ));
    } // end method 


    /// remove mini cart 
    public function RemoveMiniCart($rowId)
    {
        Cart::remove($rowId);
        return response()->json(['success' => 'Product Remove from Cart']);
    } // end mehtod 
}
