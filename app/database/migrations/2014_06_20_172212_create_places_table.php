<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('places', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->boolean('visited')->default(false);
			$table->string('address')->nullable();
			$table->string('link')->nullable();
			$table->text('info')->nullable();
			$table->integer('user_id');
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
		Schema::drop('places');
	}

}
