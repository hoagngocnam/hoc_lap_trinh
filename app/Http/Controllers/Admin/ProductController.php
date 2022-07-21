<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    // Màn hình danh sách category
    public function getList()
    {
        $productList = DB::table('products')
            ->select(
                'products.id',
                'products.picture',
                'products.name',
                'categories.name as category_name',
                'products.original_price',
                'products.promotional_price',
                'products.rating',
                'products.view'
            )
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->get()
            ->toArray();

        return view('admin.product.list', compact('productList'));
    }

    // Màn hình chi tiết category
    public function getDetail(Request $request)
    {
        $id = $request->input('id', '');
        $category = DB::table('products')->select('id', 'name')->where('id', $id)->first();
        return view('admin.product.detail', compact('category'));
    }

    // Màn hình view form add category
    public function getAdd()
    {
        $categories = DB::table('categories')->select('id', 'name')->get()->toArray();
        // dd($categories);
        return view('admin.product.add', compact('categories'));
    }

    // Màn hình post form add category
    public function postAdd(Request $request)
    {
        $arrayValidate = [
            'category_id' => 'required|integer',
            'name' => 'required|min:10|max:255',
            'original_price' => 'required',
            'promotional_price' => 'required',
            'picture' => 'required',
        ];
        $request->validate($arrayValidate);

        // Lấy category id của sản phẩm
        $category_id = $request->input('category_id', null);
        // Lấy giá trị name - tên sản phẩm
        $name = $request->input('name', '');
        // Lấy giá gốc
        $originalPrice = $request->input('original_price', null);
        // Lấy giá khuyến mãi
        $promotionalPrice = $request->input('promotional_price', null);
        // Lấy giá khuyến mãi
        $posts = $request->input('posts', null);
        // Lấy giá trị ảnh được upload
        $picture = $request->file('picture');
        // Lấy tên mã hóa sản phẩm
        $namePicture = $picture->hashName();
        // Lấy url sản phẩm để lưu giá trị này vào db
        $urlPicture = "/upload/products/" . $namePicture;
        // store: để thực hiện lưu ảnh vào folder public/upload/products trên server
        $picture->store('upload/products');

        DB::table('products')->insert([
            'category_id' => $category_id,
            'name' => $name,
            'original_price' => $originalPrice,
            'promotional_price' => $promotionalPrice,
            'posts' => $posts,
            'picture' => $urlPicture
        ]);

        return redirect()->route('admin.product.getList');
    }

    // Màn hình view form update category
    public function getUpdate(Request $request)
    {
        $id = $request->input('id', '');
        $category = DB::table('products')->select('id', 'name')->where('id', $id)->first();
        return view('admin.product.update', compact('category'));
    }

    // Màn hình post form update category
    public function postUpdate(Request $request)
    {
        $id = $request->input('id', '');
        $name = $request->input('name', '');
        DB::table('products')
            ->where('id', $id)
            ->update(['name' => $name]);

        return redirect()->route('admin.product.getList');
    }

    // Màn hình xóa category
    public function getDelete(Request $request)
    {
        $id = $request->input('id', '');
        DB::table('products')
            ->where('id', $id)
            ->delete();

        return redirect()->route('admin.product.getList');
    }
}
