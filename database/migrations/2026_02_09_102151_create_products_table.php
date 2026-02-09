<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // اسم المنتج
            $table->text('description')->nullable(); // وصف المنتج
            $table->decimal('price', 10, 2); // سعر المنتج
            $table->integer('stock')->default(0); // الكمية المتوفرة
            $table->string('image')->nullable(); // رابط الصورة
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
}
