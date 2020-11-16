<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTopSlidersTable extends Migration {

	public function up()
	{
		Schema::create('top_sliders', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
            foreach (\LaravelLocalization::getSupportedLocales() as $key => $value) {
                $table->string("title_$key")->nullable();
                $table->string("desc_$key")->nullable();
            }
		});
	}

	public function down()
	{
		Schema::drop('top_sliders');
	}
}
