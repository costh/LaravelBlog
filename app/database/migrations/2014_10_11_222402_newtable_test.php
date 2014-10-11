<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewtableTest extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('art', function($newtable)
		{
			$newtable->increments('id');
			$newtable->string('artist'); //varchar field 256
			$newtable->string('title',500);
			$newtable->text('description');
			$newtable->date('created');
			$newtable->date('exhibition_date');
			$newtable->timestamps();
		});
		//
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
