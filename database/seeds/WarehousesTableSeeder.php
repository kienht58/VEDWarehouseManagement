<?php

use Illuminate\Database\Seeder;

use App\Models\Warehouse;

class WarehousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i<10; $i++){
        	Warehouse::create([
        		'warehouse_id' => $faker->randomnumber(3),
		        'name' => $faker->sentence(20),
		        'address' => $faker->sentence(20),
		        'contact' => $faker->sentence(20),
		        'note' => $faker->sentence(50)
        		]);
        }
    }
}
