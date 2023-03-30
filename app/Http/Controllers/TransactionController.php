<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function transaction()
    {
        $id = Auth::id();
        $transactions = DB::table('transactions')->join('products', 'transactions.product_id', '=', 'products.id')->where('user_id', '=', "$id")->get();
        $timestamps = DB::table('transactions')->select('created_at', 'total')->where('user_id', '=', $id)->distinct()->get();

        return view('user.transaction', compact('transactions', 'timestamps'));
    }
}
