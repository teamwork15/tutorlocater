<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProfileAddressHoursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('profile_address_hours', function(Blueprint $table)
		{
			$table->foreign('profile_address_id', 'FKprofile_ad662229')->references('id')->on('profile_addresses')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('profile_address_hours', function(Blueprint $table)
		{
			$table->dropForeign('FKprofile_ad662229');
		});
	}

}
