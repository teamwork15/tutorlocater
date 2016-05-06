<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStudentInterestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('student_interests', function(Blueprint $table)
		{
			$table->foreign('interest_type_id', 'FKstudent_in190280')->references('id')->on('interest_types')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('student_id', 'FKstudent_in315492')->references('id')->on('students')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('student_interests', function(Blueprint $table)
		{
			$table->dropForeign('FKstudent_in190280');
			$table->dropForeign('FKstudent_in315492');
		});
	}

}
