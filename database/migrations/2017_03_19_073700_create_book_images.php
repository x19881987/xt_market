<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 图片表 把大量的图片分出来
        Schema::create('book_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('xid')->default('0')->index('xid')->comment('图片属于哪个的关联id');
            $table->string('img_path')->default('')->comment('图片地址');
            $table->smallInteger('sort')->default('50')->comment('图片排序');
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
        Schema::dropIfExists('book_images');
    }
}
