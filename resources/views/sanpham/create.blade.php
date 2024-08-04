@extends('layouts.admin') {{-- Kế thừa layout --}}
@section('content')

<form action="{{ route('sanpham.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="ten_san_pham">Tên sản phẩm:</label>
        <input type="text" class="form-control" id="ten_san_pham" name="ten_san_pham">
    </div>
    <div class="form-group">
        <label for="hinh_anh">Hình ảnh:</label>
        <input type="file" class="form-control" id="hinh_anh_input" name="hinh_anh" onchange="showImage(event)">
    </div>
    <img src="" alt="Hình Ảnh Sản Phẩm" style="width:200px; display:none" id="hinh_anh_preview">
    <div class="form-group">
        <label for="gia">Giá:</label>
        <input type="text" class="form-control" id="gia" name="gia">
    </div>
    <div class="form-group">
        <label for="so_luong">Số lượng:</label>
        <input type="text" class="form-control" id="so_luong" name="so_luong">
    </div>
    <div class="form-group">
        <label for="mo_ta">Mô tả:</label>
        <textarea class="form-control" id="mo_ta" name="mo_ta"></textarea>
    </div>
    <div class="form-group">
        <label for="ngay_nhap">Ngày nhập:</label>
        <input type="date" class="form-control" id="ngay_nhap" name="ngay_nhap">
    </div>
    <div class="form-group">
        <label for="danh_muc_id">Danh mục:</label>
        <input type="text" class="form-control" id="danh_muc_id" name="danh_muc_id">
    </div>
    <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
</form>
@endsection
@section('js')

<script>
    function showImage(event){
        const hinh_anh_preview = document.getElementById('hinh_anh_preview');
        const file = event.target.files[0];
        const render = new FileReader();
        render.onload = function(){
            hinh_anh_preview.src = render.result;
            hinh_anh_preview.style.display = 'block';
        }
        if(file){
            render.readAsDataURL(file);
        }
    }
</script>
@endsection
