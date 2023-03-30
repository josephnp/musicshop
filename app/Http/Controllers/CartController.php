<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function cart()
    {
        $id = Auth::id();
        $carts = DB::table('carts')->join('products', 'carts.product_id', '=', 'products.id')->where('user_id', '=', "$id")->get();
        $total = DB::table('carts')->select(DB::raw('sum(price * qty) as total'))->join('products', 'carts.product_id', '=', 'products.id')->where('user_id', '=', "$id")->get()->sum('total');

        return view('user.cart', compact('carts'), compact('total'));
    }

    public function update(Request $request, $id)
    {
        if ($request->qty == 0) {
            DB::table('carts')->where([['product_id', '=', $id], ['user_id', '=', Auth::id()]])->delete();
        } else {
            DB::table('carts')->where([['product_id', '=', $id], ['user_id', '=', Auth::id()]])->update([
                'qty' => $request->qty
            ]);
        }

        return redirect()->intended('/cart');
    }

    public function checkout()
    {
        $id = Auth::id();
        $carts = DB::table('carts')->join('products', 'carts.product_id', '=', 'products.id')->where('user_id', '=', "$id")->get();
        $total = DB::table('carts')->select(DB::raw('sum(price * qty) as total'))->join('products', 'carts.product_id', '=', 'products.id')->where('user_id', '=', "$id")->get()->sum('total');
        $passcode = Str::random(6);
        
        if (count($carts) == 0) {
            return redirect('/cart');
        }
        return view('user.checkout', compact('passcode', 'total', 'carts'));
    }

    public function confirm(Request $request, $passcode)
    {
        if ($request->passcode == $passcode) {
            $id = Auth::id();
            DB::table('products')->join('carts', 'products.id', '=', 'carts.product_id')->where('user_id', '=', $id)->update([
                'stock' => DB::raw('stock - qty')
            ]);

            $data = DB::table('carts')->where('user_id', '=', $id)->get();
            $total = DB::table('carts')->select(DB::raw('sum(price * qty) as total'))->join('products', 'carts.product_id', '=', 'products.id')->where('user_id', '=', "$id")->get()->sum('total');
            foreach ($data as $cart) {
                DB::table('transactions')->insert([
                    'user_id' => $cart->user_id,
                    'product_id' => $cart->product_id,
                    'qty' => $cart->qty,
                    'total' => $total,
                    'created_at' => \Carbon\Carbon::now(), # new \Datetime()
                ]);
            }

            DB::table('carts')->where('user_id', '=', $id)->delete();
            
            return redirect()->intended('/')->withSuccess('Cart checked out!');
        } else {
            return back()->withErrors('Passcode is incorrect!');
        }
    }
}