<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProfileSubjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('profile_subjects', function(Blueprint $table)
		{
			$table->foreign('subject_id', 'FKprofile_su154932')->references('id')->on('subjects')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('profile_id', 'FKprofile_su451564')->references('id')->on('profiles')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('profile_subjects', function(Blueprint $table)
		{
			$table->dropForeign('FKprofile_su154932');
			$table->dropForeign('FKprofile_su451564');
		});
	}

}
