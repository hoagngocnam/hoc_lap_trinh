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
        $productList = DB::table('products')->select('id', 'name', 'author', 'view', 'description', 'picture')->get()->toArray();
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
        return view('admin.product.add');
    }

    // Màn hình post form add category
    public function postAdd(Request $request)
    {
        // Lấy giá trị name - tên sản phẩm
        $name = $request->input('name', '');
        // Lấy giá trị author - tác giả
        $author = $request->input('author', '');
        // Lấy mô tả sản phẩm
        $description = $request->input('description', '');
        // Lấy giá trị ảnh được upload
        $picture = $request->file('picture');
        // Lấy tên mã hóa sản phẩm
        $namePicture = $picture->hashName();
        // Lấy url sản phẩm để lưu giá trị này vào db
        $urlPicture = "/upload/products/" . $namePicture;
        // store: để thực hiện lưu ảnh vào folder public/upload/products trên server
        $picture->store('upload/products');

        DB::table('products')->insert([
            'name' => $name,
            'author' => $author,
            'description' => $description,
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
