<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::dropIfExists('users');
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('user_id');//自增唯一ID
		    $table->string('user_login', 60)->index();//登录名
		    $table->string('user_pass', 64);//密码
		    $table->string('user_nickname', 50)->nullable()->index();//昵称
		    $table->integer('user_status')->nullable()->default(0);//用户状态
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
		Schema::dropIfExists('users');
	}

}
