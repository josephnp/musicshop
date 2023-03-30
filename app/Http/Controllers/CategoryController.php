<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.insertcategory', ['category'=>Category::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories|alpha'
        ]);

        DB::table('categories')->insert([
            'name' => $request->name,
        ]);

        return redirect('/manage');
    }
}
