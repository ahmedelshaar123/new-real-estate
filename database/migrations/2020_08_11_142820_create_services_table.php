<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesTable extends Migration {

	public function up()
	{
		Schema::create('services', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
            foreach (\LaravelLocalization::getSupportedLocales() as $key => $value) {
                $table->string("title_$key");
                $table->text("desc_$key");
            }
		});
	}

	public function down()
	{
		Schema::drop('services');
	}
}
