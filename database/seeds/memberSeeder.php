<?php

use Illuminate\Database\Seeder;

class memberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 6;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('members')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->e164PhoneNumber(),
                'address' => $faker->address(),
                'age' => rand(8,70),
                'avatar' => $faker->imageUrl($width = 640, $height = 480),
                'password' => ''
            ]);
        }
    }
}
