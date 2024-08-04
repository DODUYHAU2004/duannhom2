<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();

            $table->string('ten_san_pham', 100);
            $table->string('hinh_anh') -> nullable();
            $table->double('gia', 10, 2);

            $table->integer('so_luong')->nullable(); // nullable cho phép giá trị là null
            $table->text('mo_ta');
            $table->date('ngay_nhap'); // Kiểu ngày tháng năm
            $table->unsignedBigInteger('danh_muc_id');
            // tạo khóa ngoại
            $table->foreign('danh_muc_id') -> references('danh_mucs') ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
