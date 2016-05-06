<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentTeacherContactedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_teacher_contacted', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('student_id')->index('FKstudent_te258910');
			$table->integer('profile_id')->index('FKstudent_te787639');
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
		Schema::drop('student_teacher_contacted');
	}

}
