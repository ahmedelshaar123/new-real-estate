<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyTeamTable extends Migration {

	public function up()
	{
		Schema::create('company_team', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			foreach (\LaravelLocalization::getSupportedLocales() as $key => $value) {
                $table->string("name_$key");

                $table->string("job_$key");

            }
			$table->string('fb_url')->nullable();
			$table->string('tw_url')->nullable();
			$table->string('insta_url')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('company_team');
	}
}
