<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use EmpresaBebidas\Entities\Contacto;

class ContactoSeederTable extends Seeder {
	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 90) as $index)
		{
			$fullName = $faker->name;
			Contacto::create([
			  'Nombre' => $fullName,
			  'Celular'  => '123456789',
			  'Email'     => $faker->email,
	          'Direccion'      => $faker->address          
     		]);
		}
	}

}