<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserWalletLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_wallet_log', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_wallet_id')->index('FKuser_walle866984');
			$table->string('log', 100);
			$table->string('amount', 150);
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
		Schema::drop('user_wallet_log');
	}

}
