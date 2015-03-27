<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacto', function(Blueprint $table)
		{
			$table->increments('idnombre');
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
		Schema::drop('contacto');
	}

}
