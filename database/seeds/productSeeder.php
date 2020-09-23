<?php

use Illuminate\Database\Seeder;

class productSeeder extends Seeder
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
            DB::table('products')->insert([
                'ten' => $faker->name,
                'gia' => $faker->numberBetween(0,1000000),
                'so_luong' => rand(1,100),
                'id_cate' => rand(1,10),
                'img' => $faker->imageUrl($width = 640, $height = 480),
                'img1' => $faker->imageUrl($width = 640, $height = 480),
                'img2' => $faker->imageUrl($width = 640, $height = 480),
                'img3' => $faker->imageUrl($width = 640, $height = 480),
                'img4' => $faker->imageUrl($width = 640, $height = 480),
            ]);
        }
    }
}
