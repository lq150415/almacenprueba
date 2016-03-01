<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->increments('ID_USU');
			$table->string('NOM_USU',100);
			$table->string('APA_USU',100);
			$table->string('AMA_USU',100);
			$table->string('ARE_USU',100);
			$table->string('CAR_USU',100);
			$table->integer('CI_USU');
			$table->string('PAS_USU',100);
			$table->integer('NIV_USU');
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
		Schema::drop('usuarios');
	}

}
