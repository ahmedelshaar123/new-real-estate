<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartnersTable extends Migration {

	public function up()
	{
		Schema::create('partners', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('link')->unique();
		});
	}

	public function down()
	{
		Schema::drop('partners');
	}
}
