<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeaturedEstatesTable extends Migration {

	public function up()
	{
		Schema::create('featured_estates', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
            foreach (\LaravelLocalization::getSupportedLocales() as $key => $value) {
                $table->string("title_$key");
                $table->string("address_$key");
            }

		});
	}

	public function down()
	{
		Schema::drop('featured_estates');
	}
}
