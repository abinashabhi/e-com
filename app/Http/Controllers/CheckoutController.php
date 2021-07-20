<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Stripe;
use Session;

class CheckoutController extends Controller
{

    public function payment()
    {
        $userId = Session::get('user')['id'];
        $total = $products = DB::table('cart')
            ->join('products', 'cart.product_id', "=", "products.id")
            ->where('cart.user_id', $userId)
            ->sum('products.price');
        return view("checkout", ["total" => $total]);
    }

    public function makePayment(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $stripe = Stripe\Charge::create([
            "amount" => $request->amount * 100,
            "currency" => "inr",
            "source" => $request->stripeToken,
            "description" => "Transaction Successfull."

        ]);
        if ($stripe->status == 'succeeded') {

            Session::flash('success', 'Payment successfully made.');
            $userId = Session::get('user')['id'];
            $productDetails = DB::table('cart')->where('user_id', $userId)->get('product_id');
            // return dd($productDetails);

            // return dd($productDetails[1]->product_id);

            // $products = DB::table('orders')
            // ->join('products','orders.product_id',"=","products.id")
            // ->where('orders.user_id',$userId)
            // ->get();

            for($i = 0; $i < count($productDetails); $i++) {
                dd($productDetails[$i]->product_id) ;
                
            
            }
            $arr = [];
            
            for($i = 0; $i < count($productDetails); $i++) {
                $arr[] = $i;
                $order = DB::table('orders')
                    ->where('user_id', $userId)
                    ->where('product_id', "=", $productDetails[$i]->product_id)
                    ->update(['payment_status' => 'done']);

                Cart::where('user_id', $userId)->delete();
            }
             return redirect('/');
        }
    }
}
