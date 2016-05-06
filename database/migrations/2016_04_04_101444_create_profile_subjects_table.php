<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfileSubjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile_subjects', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('profile_id')->index('FKprofile_su451564');
			$table->integer('subject_id')->index('FKprofile_su154932');
			$table->boolean('is_specialization')->default(0);
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
		Schema::drop('profile_subjects');
	}

}
