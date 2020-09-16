<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('post_service', function(Blueprint $table) {
			$table->foreign('post_id')->references('id')->on('posts')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('post_service', function(Blueprint $table) {
			$table->foreign('service_id')->references('id')->on('services')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('post_service', function(Blueprint $table) {
			$table->dropForeign('post_service_post_id_foreign');
		});
		Schema::table('post_service', function(Blueprint $table) {
			$table->dropForeign('post_service_service_id_foreign');
		});
	}
}