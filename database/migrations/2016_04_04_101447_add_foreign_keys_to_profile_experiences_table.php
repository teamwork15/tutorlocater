<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProfileExperiencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('profile_experiences', function(Blueprint $table)
		{
			$table->foreign('profile_id', 'FKprofile_ex850973')->references('id')->on('profiles')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('profile_experiences', function(Blueprint $table)
		{
			$table->dropForeign('FKprofile_ex850973');
		});
	}

}
