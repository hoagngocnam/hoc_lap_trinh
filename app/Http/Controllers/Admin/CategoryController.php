<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    // Màn hình danh sách category
    public function getList()
    {
        $category = DB::table('category')->select('id', 'name')->get()->toArray();
        return view('admin.category.list', compact('category'));
    }

    // Màn hình chi tiết category
    public function getDetail(Request $request)
    {
        $id = $request->input('id', '');
        $category = DB::table('category')->select('id', 'name')->where('id', $id)->first();
        return view('admin.category.detail', compact('category'));
    }

    // Màn hình view form add category
    public function getAdd()
    {
        return view('admin.category.add');
    }

    // Màn hình post form add category
    public function postAdd(Request $request)
    {
        $name = $request->input('name', '');
        DB::table('category')->insert([
            'name' => $name
        ]);

        return redirect()->route('admin.category.getList');
    }

    // Màn hình view form update category
    public function getUpdate(Request $request)
    {
        $id = $request->input('id', '');
        $category = DB::table('category')->select('id', 'name')->where('id', $id)->first();
        return view('admin.category.update', compact('category'));
    }

    // Màn hình post form update category
    public function postUpdate(Request $request)
    {
        $id = $request->input('id', '');
        $name = $request->input('name', '');
        DB::table('category')
            ->where('id', $id)
            ->update(['name' => $name]);

        return redirect()->route('admin.category.getList');
    }

    // Màn hình xóa category
    public function getDelete(Request $request)
    {
        $id = $request->input('id', '');
        DB::table('category')
            ->where('id', $id)
            ->delete();

        return redirect()->route('admin.category.getList');
    }
}
