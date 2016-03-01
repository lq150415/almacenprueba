<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tablas extends Migration {

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
		Schema::create('almacenes', function(Blueprint $table)
		{
			$table->increments('ID_ALM');
			$table->string('NOM_ALM',100);
			$table->string('UBI_ALM',100);
			$table->timestamps();
			
		});

		Schema::create('rubros', function(Blueprint $table)
		{
			$table->increments('ID_RUB');
			$table->string('NOM_RUB',100);
			$table->integer('CPR_RUB');
			$table->integer('ID_ALM')->unsigned();
			$table->foreign('ID_ALM')->references('ID_ALM')->on('almacenes');
			$table->timestamps();
		});
	
		Schema::create('productos', function(Blueprint $table)
		{
			$table->increments('ID_PRO');
			$table->integer('ITM_PRO');
			$table->text('DES_PRO');
			$table->float('PUN_PRO');
			$table->integer('CAN_PRO');
			$table->integer('ID_RUB')->unsigned();
			$table->foreign('ID_RUB')->references('ID_RUB')->on('rubros');
			$table->timestamps();
			
		});
		Schema::create('ingresos', function(Blueprint $table)
		{
			$table->increments('ID_ING');
			$table->date('FEC_ING');
			$table->integer('NFC_ING');
			$table->integer('NOC');
			$table->integer('CAN_ING');
			$table->text('PRO_ING');
			$table->integer('ID_PRO')->unsigned();
			$table->foreign('ID_PRO')->references('ID_PRO')->on('productos');
			$table->integer('ID_USU')->unsigned();
			$table->foreign('ID_USU')->references('ID_USU')->on('usuarios');
			$table->timestamps();
			
		});
		Schema::create('solicitudes', function(Blueprint $table)
		{
			$table->increments('ID_SOL');
			$table->dateTime('FEC_SOL');
			$table->integer('EST_SOL');
			$table->integer('ID_USU')->unsigned();
			$table->foreign('ID_USU')->references('ID_USU')->on('usuarios');
		});
		Schema::create('productos_solicitados', function(Blueprint $table)
		{
			$table->increments('ID_PRS');
			$table->integer('CAN_PRS');
			$table->integer('ID_SOL')->unsigned();
			$table->foreign('ID_SOL')->references('ID_SOL')->on('solicitudes');;
			$table->integer('ID_PRO')->unsigned();
			$table->foreign('ID_PRO')->references('ID_PRO')->on('productos');
			$table->timestamps();
			
		});
		Schema::create('registros', function(Blueprint $table)
		{
			$table->increments('ID_REG');
			$table->dateTime('FEC_REG');
			$table->string('ACC_REG',45);
			$table->text('DES_REG');
			$table->integer('ID_USU')->unsigned();
			$table->foreign('ID_USU')->references('ID_USU')->on('usuarios');
		});
		Schema::create('respuestas', function(Blueprint $table)
		{
			$table->increments('ID_RES');
			$table->tinyInteger('RES_RES');
			$table->dateTime('FEC_RES');
			$table->integer('ID_USU')->unsigned();
			$table->foreign('ID_USU')->references('ID_USU')->on('usuarios');
			$table->integer('ID_SOL')->unsigned();
			$table->foreign('ID_SOL')->references('ID_SOL')->on('solicitudes');
			$table->timestamps();
			
		});
		
		Schema::create('salidas', function(Blueprint $table)
		{
			$table->increments('ID_SAL');
			$table->dateTime('FEC_SAL');
			$table->integer('DGA_SAL');
			$table->text('DES_SAL');
			$table->integer('CAN_SAL');
			$table->integer('ID_PRO')->unsigned();
			$table->foreign('ID_PRO')->references('ID_PRO')->on('productos');
			$table->integer('ID_USU')->unsigned();
			$table->foreign('ID_USU')->references('ID_USU')->on('usuarios');
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
		Schema::drop('almacenes');
		Schema::drop('ingresos');
		Schema::drop('productos');
		Schema::drop('productos_solicitados');
		Schema::drop('registros');
		Schema::drop('respuestas');
		Schema::drop('rubros');
		Schema::drop('salidas');
		Schema::drop('solicitudes');
	}

}
