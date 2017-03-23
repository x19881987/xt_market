<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookProductContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 产品的详情可能有长文本或是图片，这个不需要在列表页就查出来所以从product 分出来单独做表
        Schema::create('book_product_content', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pdt_id')->index('pdt_id')->default('0')->comment('product表的关联id');
            $table->text('content')->comment('产品的长文本');
            
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
        Schema::dropIfExists('book_product_content');
    }
}
