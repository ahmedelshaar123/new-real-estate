<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostServiceTable extends Migration {

	public function up()
	{
		Schema::create('post_service', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('post_id')->unsigned();
			$table->integer('service_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('post_service');
	}
}