<?php

use Illuminate\Database\Seeder;
use App\CommentModel;
class CommentSeeder extends Seeder
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
                'title' => '$faker->sentence',
                'content' => 'Day la noi dung 1 rat la dai',
                'id_mem' => rand(1,5)
            ];
            
            CommentModel::create($item);
        };
    }
}
