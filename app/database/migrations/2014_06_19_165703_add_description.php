<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDescription extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
 public function up()
	{
    Schema::table('games', function($table){

         $table->text("description");


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
