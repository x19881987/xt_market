<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BookUsersColumnAdd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         // 已经存在 book_users 增加 修改 删除操作
        Schema::table('book_users', function (Blueprint $table) {
            
            $table->string('nickname',30)->default('')->comment('昵称')->after('id');
            $table->string('mobile',11)->default('')->comment('手机')->after('nickname')->index();
            $table->string('email')->default('')->comment('邮箱')->index()->after('mobile');
            $table->string('avatar')->default('')->comment('头像')->after('email');
            $table->string('password')->comment('登录密码')->after('avatar');
            $table->string('salt')->default('')->comment('给密码加盐值')->after('password');
            $table->string('status')->default('1')->comment('0、封禁  1、未激活 2、正常 4、已认证')->after('salt');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_users', function (Blueprint $table) {
            $table->dropColumn([
                    'nickname',
                    'mobile',
                    'email',
                    'avatar',
                    'password',
                    'salt',
                    'status'
                    
                ]);
            // 上面添加操作的回撤
        //   if (Schema::hasColumn('nickname', 'mobile','email','avatar','password','salt','status')){
        //         $table->dropColumn([
        //             'nickname',
        //             'mobile',
        //             'email',
        //             'avatar',
        //             'password',
        //             'salt',
        //             'status'
                    
        //         ]);

        //     } 
        });
    }
}
