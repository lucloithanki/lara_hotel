<?php

use Illuminate\Database\Seeder;
use App\MemModel;
class MemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 5; $i++) {
            $item = [
                'id_room' => rand(1,5),
                'u_name' => $faker->name,
                'password' => '$2y$10$8lY/qWDfagf8KfW.7bgQMOxjtua0KD3MeesqdU04UVZhUc2Ci7DCe',
                'email' => $faker->email,
                'phone' => rand(1111111111,9999999999),
                'address' => $faker->address,
                'birthday' => $faker->date,
            ];
            MemModel::create($item);
        };
    }
}
