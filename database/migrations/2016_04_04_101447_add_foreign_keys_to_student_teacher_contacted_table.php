<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStudentTeacherContactedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('student_teacher_contacted', function(Blueprint $table)
		{
			$table->foreign('student_id', 'FKstudent_te258910')->references('id')->on('students')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('profile_id', 'FKstudent_te787639')->references('id')->on('profiles')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('student_teacher_contacted', function(Blueprint $table)
		{
			$table->dropForeign('FKstudent_te258910');
			$table->dropForeign('FKstudent_te787639');
		});
	}

}
