<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfileReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile_reviews', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('rating');
			$table->string('query');
			$table->string('review');
			$table->boolean('is_anonymus')->default(0);
			$table->integer('student_id');
			$table->integer('profile_id')->index('FKprofile_re564358');
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
		Schema::drop('profile_reviews');
	}

}
