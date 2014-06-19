<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('forums');
		Schema::create('forums', function(Blueprint $table)
		{
			$table->increments('forum_id');//自增唯一ID
		    $table->integer('user_id');//对应作者ID
		    $table->integer('block_id');//对应板块ID
		    $table->string('title')->index();//标题
		    $table->longText('content')->nullable();//正文   
		    $table->string('forum_status', 20)->nullable()->default('open');//文章状态（open/closed等）
		    $table->timestamps();
		    $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('forums');
	}

}
