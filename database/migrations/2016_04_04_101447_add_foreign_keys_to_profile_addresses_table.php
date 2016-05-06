<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProfileAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('profile_addresses', function(Blueprint $table)
		{
			$table->foreign('profile_id', 'FKprofile_ad609676')->references('id')->on('profiles')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('profile_addresses', function(Blueprint $table)
		{
			$table->dropForeign('FKprofile_ad609676');
		});
	}

}
