<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id'); // Foreign key
            $table->string('category_name');          // Optional, can derive from category_id
            $table->string('title');
            $table->string('imageUrl');              // URL or file path
            $table->decimal('price', 10, 2);         // Price with two decimals
            $table->text('description')->nullable(); // Rich text
            $table->text('usage')->nullable();       // Rich text
            $table->text('material')->nullable();    // Rich text
            $table->boolean('show_feat')->default(false); // Featured flag
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}

