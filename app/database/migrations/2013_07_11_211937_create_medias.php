<?php

use Illuminate\Database\Migrations\Migration;

class CreateMedias extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media', function($table) {
	        $table->increments('id');
	        $table->('type', array('image', 'video'));
	        $table->string('name', 256);
	        $table->string('url', 256);
	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}