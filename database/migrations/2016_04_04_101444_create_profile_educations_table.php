<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfileEducationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile_educations', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('profile_id')->index('FKprofile_ed753170');
			$table->string('start_year', 4);
			$table->string('end_year', 4);
			$table->string('title');
			$table->string('university');
			$table->string('description')->nullable();
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
		Schema::drop('profile_educations');
	}

}
