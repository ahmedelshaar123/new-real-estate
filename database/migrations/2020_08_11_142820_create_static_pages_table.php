<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaticPagesTable extends Migration {

	public function up()
	{
		Schema::create('static_pages', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
            foreach (\LaravelLocalization::getSupportedLocales() as $key => $value) {
                $table->string("name_$key");
                $table->text("value_$key")->nullable();
            }
			$table->string('key')->unique();
			$table->string('type');

		});
	}

	public function down()
	{
		Schema::drop('static_pages');
	}
}
