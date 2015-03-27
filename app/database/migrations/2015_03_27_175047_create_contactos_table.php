<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contactos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Nombre',30);
			$table->string('Celular',9);
			$table->string('Email',50);
			$table->string('Direccion',30);
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
		Schema::drop('contactos');
	}

}
