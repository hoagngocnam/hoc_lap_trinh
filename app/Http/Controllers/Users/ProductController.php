<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function detail(Request $request)
    {
        $id = $request->input('id', '');
        $product = DB::table('products')->select('id', 'name', 'author', 'view', 'description', 'picture')->where('id', $id)->first();
        $categoryList = DB::table('category')->select('id', 'name')->get()->toArray();

        return view('users.product.detail', compact('product','categoryList'));
    }
}
