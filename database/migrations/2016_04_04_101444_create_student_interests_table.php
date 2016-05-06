<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentInterestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_interests', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('student_id')->index('FKstudent_in315492');
			$table->integer('interest_type_id')->index('FKstudent_in190280');
			$table->string('value');
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
		Schema::drop('student_interests');
	}

}
