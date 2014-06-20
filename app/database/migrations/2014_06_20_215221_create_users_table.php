<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('login')->unique();
			$table->string('password');
			$table->string('remember_token', 100)->nullable();
			$table->timestamp('created_at')->default(DB::raw('now()::timestamp(0)'));
			$table->timestamp('updated_at')->default(DB::raw('now()::timestamp(0)'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
