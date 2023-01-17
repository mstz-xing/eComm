<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;

class CartController extends Controller
{
  function addProduct(Request $req)
  {
    $product_id = $req->input('product_id');
    $product_qty = $req->input('product_qty');
    if(Auth::check())
    {

        // return response()->json(['status'=>"welcome from"]);
        $prod_check = Product::where('id',$product_id)->first();
        if($prod_check)
        {
            if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists())
            {
                return response()->json(['status'=>$prod_check->name." Already Added to cart"]);
            }
            else{

                $cartItem = new Cart();
                $cartItem->prod_id= $product_id;
                $cartItem->user_id= Auth::id();
                $cartItem->prod_qty= $product_qty;
                $cartItem->save();
                return response()->json(['status'=>$prod_check->name." Added to cart"]);
            }
           

        }

    }
    else{
        return response()->json(['status'=>" Login to continue"]);

    }
  }

  function viewCart()
  {
    $cartitems = Cart::where('user_id',Auth::id())->get();
    return view('frontend.cart',compact('cartitems'));
  }

  function deleteProduct(Request $req)
  { if(Auth::check())
    {
     $prod_id = $req->input('prod_id');
     if(Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->exists())
        {
           $cartItem = Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->first();
           $cartItem->delete();
           return response()->json(['status'=>"Product deleted successfully"]);
        }
      else
        {
    
        }  
    }
   
    else
    {
        return response()->json(['status'=>" Login to continue"]);
    }

  }

  function updateCart(Request $req)
  {
    $prod_id = $req->input('prod_id');
    $prod_qty = $req->input('prod_qty');
    if(Auth::check())
    {
        if(Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->exists())
        {
             $cart = Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->first();
             $cart->prod_qty = $prod_qty;
             $cart->update();
             return response()->json(['status'=>"Quantity updated"]);
        }
    
    }
  
   }
}