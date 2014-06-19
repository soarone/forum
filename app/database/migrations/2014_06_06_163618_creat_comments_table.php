<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('comments');
		Schema::create('comments', function(Blueprint $table)
		{
			$table->increments('comment_id');//自增唯一ID
			$table->integer('forum_id');//对应文章ID
			$table->integer('user_id');//评论者
			$table->text('comment_content');//评论正文
			$table->integer('comment_status')->nullable()->default(0);//用户状态
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
		Schema::dropIfExists('comments');
	}

}
