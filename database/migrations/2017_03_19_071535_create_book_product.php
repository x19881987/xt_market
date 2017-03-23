<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_product', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name')->index('name')->default('')->comment('商品名称');
            $table->string('preview',60)->default('')->comment('产品图片路径');
            $table->integer('cid')->default('0')->comment('产品所属分类');
            $table->decimal('price',10,2)->default('0.00')->comment('产品价格保留两位小数');
            $table->string('bewrite',2000)->default('')->comment('产品描述');
            
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
        Schema::dropIfExists('book_product');
    }
}
