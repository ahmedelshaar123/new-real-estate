<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBottomSlidersTable extends Migration
{

    public function up()
    {
        Schema::create('bottom_sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            foreach (\LaravelLocalization::getSupportedLocales() as $key => $value) {
                $table->text("desc_$key");
            }
        });
    }

    public function down()
    {
        Schema::drop('bottom_sliders');
    }
}
