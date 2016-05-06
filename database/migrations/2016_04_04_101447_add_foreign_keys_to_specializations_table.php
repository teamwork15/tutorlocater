<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSpecializationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('specializations', function(Blueprint $table)
		{
			$table->foreign('course_id', 'FKspecializa811107')->references('id')->on('courses')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('specializations', function(Blueprint $table)
		{
			$table->dropForeign('FKspecializa811107');
		});
	}

}
