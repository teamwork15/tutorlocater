<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->unsigned()->index('FKprofiles815537');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('dob')->nullable();
			$table->string('referral_code', 50);
			$table->string('mobile', 10);
			$table->string('fees')->nullable();
			$table->string('about_me')->nullable();
			$table->integer('recommendation')->default(0);
			$table->string('profile_image')->nullable();
			$table->boolean('is_institute')->default(0);
			$table->string('facebook_url')->nullable();
			$table->string('google_plus_url')->nullable();
			$table->string('twitter_url')->nullable();
			$table->string('linked_in_url')->nullable();
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
		Schema::drop('profiles');
	}

}
