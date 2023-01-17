<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $old_cartitems = Cart::where('user_id',Auth::id())->get();
        foreach($old_cartitems as $item)
        {
            if(!Product::where('id',$item->prod_id)->where('qty','>=',$item->prod-qty)->exists())
            {
               $removeItem = Cart::where('user_id',Auth::id())->where('prod_id',$item->prod_id)->first();
               $removeItem->delete();
               
            }
        }
        $cartitems = Cart::where('user_id',Auth::id())->get();
        return view('frontend.checkout',compact('cartitems'));
    }

    public function placeorder(Request $req)
    {
      $order = new Order();
      $order->fname = $req->input('fname');
      $order->lname = $req->input('lname');
      $order->email = $req->input('email');
      $order->phoneno = $req->input('phoneno');
      $order->address1 = $req->input('address1');
      $order->address2 = $req->input('address2');
      $order->city = $req->input('city');
      $order->state = $req->input('state');
      $order->country = $req->input('country');
      $order->pincode = $req->input('pincode');
      $order->tracking_no = 'mstz'.rand(1111,9999); 
      $order->save();
      $order->id;
      $cartitems = Cart::where('user_id',Auth::id())->get();
      foreach($cartitems as $item)
      {
        OrderItem::create([
            'order_id' => $order_id,
            'prod_id'  => $item->prod_id,
            'qty'      => $item->prod_qty,
            'price'    => $item->products->selling_price,
        ]);
      }



      
}
}
