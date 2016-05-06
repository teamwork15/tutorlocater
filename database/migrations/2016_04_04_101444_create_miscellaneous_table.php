<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMiscellaneousTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('miscellaneous', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email');
			$table->string('mobile', 10);
			$table->string('description');
			$table->integer('type_id')->index('FKmiscellane833817');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('miscellaneous');
	}

}
