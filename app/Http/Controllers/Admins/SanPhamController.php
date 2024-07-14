<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{

    public function index()
    {

        $listSanPham = SanPham::get();

        $title = "Danh sách sản phẩm";
        return view('admins.index', compact('title', 'listSanPham'));
    }


    public function create()
    {
        return view('sanpham.create');
    }


    public function store(Request $request)
    {

        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            SanPham::create($params);
            return redirect()->route('sanpham.index')->with('success', 'Thêm sản phẩm thành công!');
        }
    }

    public function show(string $id)
    {

    }


    public function edit(string $id)
    {

    }


    public function update(Request $request, string $id)
    {

    }


    public function destroy(string $id)
    {

    }


    public function test()
    {
        dd('Phương thức test');
    }
}
