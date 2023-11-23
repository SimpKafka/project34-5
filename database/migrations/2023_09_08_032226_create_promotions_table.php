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
        Schema::create('promotions', function (Blueprint $table) {
            $table->increments('promotion_id')->comment('รหัสโปรโมชั่น');
            //$table->string('promotion')->comment('ชื่อโปรโมชั่น');
            //$table->string('create_at')->comment('เพิ่มโปรโมชั่น');
            //$table->string('update_at')->comment('อัพเดตโปรโมชั่น');
            $table->string('image')->comment('รูปโปรโมชั่น');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
    }
};
