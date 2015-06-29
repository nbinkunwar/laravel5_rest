<?php
/**
 * Created by IntelliJ IDEA.
 * User: nbin
 * Date: 6/29/15
 * Time: 1:47 AM
 */

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Lesson;

class LessonsTableSeeder extends Seeder{

    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 30) as $index){

            Lesson::create([
            'title' => $faker->sentence(5),
            'body'  => $faker->paragraph(4)
            ]);

        }
    }
}