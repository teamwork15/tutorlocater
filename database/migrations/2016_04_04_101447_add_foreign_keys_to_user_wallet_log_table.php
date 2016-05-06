<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserWalletLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_wallet_log', function(Blueprint $table)
		{
			$table->foreign('user_wallet_id', 'FKuser_walle866984')->references('id')->on('user_wallet')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_wallet_log', function(Blueprint $table)
		{
			$table->dropForeign('FKuser_walle866984');
		});
	}

}
