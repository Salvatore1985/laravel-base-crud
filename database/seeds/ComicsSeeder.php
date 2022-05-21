<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Faker\Generator as Faker;
class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for ($i=0; $i <50 ; $i++) {
            $comic =new Comic();
            $comic->title=$faker->word(20);
            $comic->description=$faker->word(20);
            $comic->thumb=$faker->word(20);
            $comic->price=$faker->randomFloat(2,2,100);
            $comic->series=$faker->word(20);
            $comic->sale_date=$faker->date('Y-m-d');
            $comic->type=$faker->word(20);
            $comic->save();
       }

    }

}
