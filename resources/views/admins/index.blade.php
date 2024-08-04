{{-- resources/views/sanpham/index.blade.php --}}

@extends('layouts.admin') {{-- Kế thừa layout --}}

@section('title', 'Danh sách sản phẩm') {{-- Tiêu đề trang --}}

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('sanpham.create') }}" class="btn btn-primary mb-3">Thêm sản phẩm</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Tên Sản Phẩm</th>
                <th scope="col">Hình Ảnh</th>
                <th scope="col">Giá</th>
                <th scope="col">Số Lượng</th>
                <th scope="col">Mô Tả</th>
                <th scope="col">Ngày Nhập</th>
                <th scope="col">Danh Mục ID</th>
                <th scope="col">Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listSanPham as $sanPham)
                <tr>
                    <td>{{ $sanPham->ten_san_pham }}</td>
                    <td><img src="{{ Storage::url($sanPham->hinh_anh)}}" alt="Hình ảnh" width="50"></td>
                    <td>{{ $sanPham->gia }}</td>
                    <td>{{ $sanPham->so_luong }}</td>
                    <td>{{ $sanPham->mo_ta }}</td>
                    <td>{{ $sanPham->ngay_nhap }}</td>
                    <td>{{ $sanPham->danh_muc_id }}</td>
                    <td>
                        <form action="{{ route('sanpham.destroy', $sanPham->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
