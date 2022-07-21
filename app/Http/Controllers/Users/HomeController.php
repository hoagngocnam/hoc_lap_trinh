<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /*
    * Màn hình trang chủs
    */
    public function index()
    {
        $productList = DB::table('products')->select('id', 'name', 'view', 'picture', 'original_price', 'promotional_price')->get()->toArray();
        $categoryList = DB::table('categories')->select('id', 'name')->get()->toArray();
        // dd($productList);
        return view('users.home.index', compact('productList','categoryList'));
    }
}
