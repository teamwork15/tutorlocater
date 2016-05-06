<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfileAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile_addresses', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('profile_id')->index('FKprofile_ad609676');
			$table->string('description')->nullable();
			$table->string('address');
			$table->string('city');
			$table->string('state', 150);
			$table->string('country', 50)->default('India');
			$table->boolean('is_default')->default(0);
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
		Schema::drop('profile_addresses');
	}

}
