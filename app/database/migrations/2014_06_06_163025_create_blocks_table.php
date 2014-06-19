<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlocksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::dropIfExists('blocks');
		Schema::create('blocks', function(Blueprint $table)
		{
			$table->increments('block_id');//自增唯一ID
		    $table->string('block_name', 64);//板块名称
		    $table->integer('block_status')->nullable()->default(0);//板块状态
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
        Schema::dropIfExists('blocks');
	}

}
