<form action="{{ route('sanpham.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="ten_san_pham">Tên sản phẩm:</label>
        <input type="text" class="form-control" id="ten_san_pham" name="ten_san_pham">
    </div>
    <div class="form-group">
        <label for="hinh_anh">Hình ảnh:</label>
        <input type="text" class="form-control" id="hinh_anh" name="hinh_anh">
    </div>
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
