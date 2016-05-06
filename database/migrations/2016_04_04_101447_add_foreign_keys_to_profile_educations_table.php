<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProfileEducationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('profile_educations', function(Blueprint $table)
		{
			$table->foreign('profile_id', 'FKprofile_ed753170')->references('id')->on('profiles')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('profile_educations', function(Blueprint $table)
		{
			$table->dropForeign('FKprofile_ed753170');
		});
	}

}
