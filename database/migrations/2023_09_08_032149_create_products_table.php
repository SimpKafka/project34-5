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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id')->comment('รหัสสินค้า');
            $table->string('name')->comment('ชื่อสินค้า');
            $table->string('price')->comment('ราคาสินค้า');
            // $table->string('create_at')->comment('เพิ่มสินค้า');
            // $table->string('update_at')->comment('อัพเดตสินค้า');
            $table->string('image')->comment('รูปสินค้า');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
