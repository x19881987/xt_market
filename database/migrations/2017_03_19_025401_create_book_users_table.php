<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('book_users')){
            
            Schema::create('book_users', function (Blueprint $table) {
                // 引擎
                $table->engine = 'InnoDB';
                
                $table->increments('id')->unsigned();
                // 添加一个 remember_token 列： VARCHAR(100) NULL.
                $table->rememberToken();
                // 添加 created_at 和 updated_at列
                $table->timestamps();
            });
        }
        
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_users', function (Blueprint $table) {
            //
        });
    }
}
