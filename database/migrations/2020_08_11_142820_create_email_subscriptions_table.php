<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailSubscriptionsTable extends Migration {

	public function up()
	{
		Schema::create('email_subscriptions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('email');
		});
	}

	public function down()
	{
		Schema::drop('email_subscriptions');
	}
}