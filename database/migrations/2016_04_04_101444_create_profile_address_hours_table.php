<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfileAddressHoursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile_address_hours', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('profile_address_id')->index('FKprofile_ad662229');
			$table->integer('weekday');
			$table->string('start_hour', 20);
			$table->string('end_hour', 20);
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
		Schema::drop('profile_address_hours');
	}

}
