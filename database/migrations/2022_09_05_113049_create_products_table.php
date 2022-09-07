<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoryproduct_id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->string('telp');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('image_produsen')->nullable();
            $table->string('contoh1')->nullable();
            $table->string('contoh2')->nullable();
            $table->string('contoh3')->nullable();
            $table->string('contoh4')->nullable();
            $table->string('contoh5')->nullable();
            $table->string('contoh6')->nullable();
            $table->string('instagram');
            $table->string('facebook');
            $table->text('excerpt');
            $table->text('body');
            $table->string('produsen');
            $table->timestamp('published_at');
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}