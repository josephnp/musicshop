<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->Role == "user") {
                return view('user.home', ['products'=>Product::all()]);
            } else {
                return view('admin.home', ['products'=>Product::all()]);
            }
        }

        return view('guest.home', ['products'=>Product::all()]);
    }

    public function products()
    {
        $products = Product::paginate(12);
        
        if (Auth::check()) {
            if (Auth::user()->Role == "user") {
                return view('user.product', compact('products'));
            } else {
                return redirect('/manage');
            }
        }
        return view('guest.product', compact('products'));
    }

    public function showdetail($id){
        $product = Product::where('id','=',$id)->first();
        
        if (Auth::check()) {
            if (Auth::user()->Role == "user") {
                return view('user.product_detail', compact('product'));
            } else {
                return view('admin.product_detail', compact('product'));
            }
        }
        return view('guest.product_detail', compact('product'));
    }

    public function searchproduct(Request $request)
    {
        $search = $request->search;
        $products = Product::where('name', 'LIKE', "%$search%")->orWhere('description', 'LIKE', "%$search%")->paginate(12);

        if (Auth::check()) {
            return view('user.search', compact('products'));
        }
        return view('guest.search', compact('products'));
    }

    public function searchproductadmin(Request $request)
    {
        $search = $request->search;
        $products = Product::where('name', 'LIKE', "%$search%")->orWhere('description', 'LIKE', "%$search%")->paginate(12);
        return view('admin.searchadmin', compact('products'));
    }

    public function indexproadmin()
    {
        $products = Product::paginate(12);
        return view('admin.productadmin', compact('products'));
    }

    public function insertview(Request $request)
    {
        $products = Product::all();
        $category = Category::all();

        return view('admin.insertproduct', compact('products', 'category'));
    }

    public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'category_id' => 'required',
            'price' => 'required|between:1000,10000000|integer',
            'description' => 'required|between:15,500',
            'stock' => 'required|between:1,10000|integer',
            'pic'=> 'required|mimes: jpg,jpeg,png',
        ]);

        $original_name = $request->file('pic');
        $name = $original_name->getClientOriginalName();
        $file_name = 'image/' . $name ;
        $original_name->move('image', $file_name);

        DB::table('products')->insert([
            'name' => $request->name,
            'picture'=> $file_name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'description' => $request->description,
            'stock' => $request->stock
        ]);

        return redirect('/manage');
    }

    public function updateview(Request $request, $id)
    {
        $products = Product::where('id','=',$id)->first();
        $category = Category::all();

        return view('admin.updateproduct',compact('products','category'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required',
            'price' => 'required|between:1000,10000000|integer',
            'description' => 'required|between:15,500',
            'stock' => 'required|between:1,10000|integer',
            'pic'=> 'required|mimes: jpg,jpeg,png',
        ]);

        $prodname = Product::where('id','=',$id)->first();
        $original_name = $request->file('pic');
        $name = $original_name->getClientOriginalName();
        $file_name = 'image/' . $name ;
        $original_name->move('image', $file_name);

        DB::table('products')->where('id', 'LIKE', $id)->update([
            'name' => $prodname->name,
            'picture'=> $file_name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'description' => $request->description,
            'stock' => $request->stock
        ]);

        return redirect('/manage');
    }
    public function remove($id)
    {
        $product = Product::where('id','=',$id)->first();
        File::delete($product->picture);

        DB::table('products')->where('id', $product->id)->delete();
        return redirect('/manage');
    }

    public function addtocart($id)
    {
        if (DB::table('carts')->where([['product_id', '=', $id], ['user_id', '=', Auth::id()]])->exists()) {
            if (DB::table('carts')->join('products', 'carts.product_id', '=', 'products.id')->where([['product_id', '=', $id], ['user_id', '=', Auth::id()], ['products.stock', '=', 'carts.qty']])->exists()) {
                return redirect('/product')->withSuccess('Limit reached');
            } else {
                DB::table('carts')->where([['product_id', '=', $id], ['user_id', '=', Auth::id()]])->increment('qty', 1);
            }
        } else {
            DB::table('carts')->insert([
                'user_id' => Auth::id(),
                'product_id' => $id,
                'qty' => 1
            ]);
        }

        return redirect('/cart');
    }
}
