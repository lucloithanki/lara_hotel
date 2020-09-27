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
                'gia' => $faker->numberBetween(0,100000),
                'so_luong' => rand(1,100),
                'id_cate' => rand(1,10),
                'img' => $faker->imageUrl($width = 270, $height = 320),
                'mieuta'=> $faker->text(),
                'img1' => $faker->imageUrl($width = 270, $height = 320),
                'img2' => $faker->imageUrl($width = 270, $height = 320),
                'img3' => $faker->imageUrl($width = 270, $height = 320),
                'img4' => $faker->imageUrl($width = 270, $height = 320),
            ]);
        }
    }
}
