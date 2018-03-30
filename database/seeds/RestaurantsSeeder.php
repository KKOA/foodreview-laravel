<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Faker\Generator as Faker;
//use Faker\Factory as Faker;

use App\Restaurant;

class RestaurantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        Restaurant::firstOrCreate(
            ['name'=>'El Greco'], //Greek
            [
                'name'          =>  'El Greco',
                'description'   => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '27 Rother Street',
                'address2'      =>  '',
                'city'          =>  'Stratford-upon-Avon',
                'county'        =>  '',
                'postcode'      =>  'CV37 6QB'
            ]
        );
        Restaurant::firstOrCreate(
            ['name'=>'Reubens'], //Russina
            [
                'name'          =>  'Reubens',
                'description'   => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '79 Baker Street',
                'address2'      =>  '',
                'city'          =>  'London',
                'county'        =>  '',
                'postcode'      =>  'W1U 6AG'
            ]
        );
        Restaurant::firstOrCreate(
            ['name'=>'Laduree UK'], //Swedish
            [
                'name'          =>  'Laduree UK',
                'description'   => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '71 Burlington Arcade',
                'address2'      =>  '',
                'city'          =>  'London',
                'county'        =>  '',
                'postcode'      =>  'W1J 0QX'
            ]
        );
        Restaurant::firstOrCreate(
            ['name'=>'Sorrentino Restaurant'], //Italien
            [
                'name'          =>  'Sorrentino Restaurant',
                'description'   => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '64 Gold Street',
                'address2'      =>  '',
                'city'          =>  'Northampton',
                'county'        =>  '',
                'postcode'      =>  'NN1 1RS'
            ]
        );
        Restaurant::firstOrCreate(
            ['name'=>'Makara'], //Turkish
            [
                'name'          =>  'Makara',
                'description'   => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '28 Church Road',
                'address2'      =>  '',
                'city'          =>  'Hove',
                'county'        =>  '',
                'postcode'      =>  'BN3 2FN'
            ]
        );
        Restaurant::firstOrCreate(
            ['name'=>'Tenkaichi'], //Japanense
            [
                'name'          =>  'Tenkaichi',
                'description'   =>  $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '236 City Road',
                'address2'      =>  '',
                'city'          =>  'Cardiff',
                'county'        =>  '',
                'postcode'      =>  'CF24 3JJ'
            ]
        );

        Restaurant::firstOrCreate(
            ['name'=>'Bear & Billet'],//German
            [
                'name'          =>  'Bear & Billet',
                'description'   =>  $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '94 Lower Bridge Street',
                'address2'      =>  '',
                'city'          =>  'Chester',
                'county'        =>  '',
                'postcode'      =>  'CH1 1RU'
            ]
        );

        Restaurant::firstOrCreate(
            ['name'=>'Akamba'], //African
            [
                'name'          =>  'Akamba',
                'description'   => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  'Tythe Barn Lane',
                'address2'      =>  '',
                'city'          =>  'Solihull',
                'county'        =>  '',
                'postcode'      =>  'B90 1PH'
            ]
        );
        Restaurant::firstOrCreate(
            ['name'=>'Bistro Jacques'],//French
            [
                'name'          =>  'Bistro Jacques',
                'description'   =>  $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '29 Claremount Street',
                'address2'      =>  '',
                'city'          =>  'Shrewsbury',
                'county'        =>  '',
                'postcode'      =>  'SY1 1RD'
            ]
        );
        Restaurant::firstOrCreate( //American
            ['name'=>'Infamous Diner'],
            [
                'name'          =>  'Infamous Diner',
                'description'   =>  $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '3-5 Basil Chambers Nicholas Croft',
                'address2'      =>  '',
                'city'          =>  'Manchester',
                'county'        =>  '',
                'postcode'      =>  'M4 1EY'
            ]
        );

        Restaurant::firstOrCreate(
            ['name'=>'Los Gatos'], //Spanish
            [
                'name'          =>  'Los Gatos',
                'description'   =>  $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '1-3 Devizes Road',
                'address2'      =>  'Old Town',
                'city'          =>  'Swindon',
                'county'        =>  '',
                'postcode'      =>  'SN4 4BJ'
            ]
        );

        Restaurant::firstOrCreate(
            ['name'=>'Nur'], //Egyptian
            [
                'name'          =>  'Nur',
                'description'   =>  $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '22 Bridge Street',
                'address2'      =>  '',
                'city'          =>  'Glasgow',
                'county'        =>  '',
                'postcode'      =>  'G5 9HR'
            ]
        );

        Restaurant::firstOrCreate(
            ['name'=>'Thai Garden'], //Thai
            [
                'name'          =>  'Thai Garden',
                'description'   =>  $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '100 West Street',
                'address2'      =>  '',
                'city'          =>  'Bristol',
                'county'        =>  '',
                'postcode'      =>  'BS3 3LR'
            ]
        );

        Restaurant::firstOrCreate(
            ['name'=>'Amigos Mexican Restaurant'], //Mexican
            [
                'name'          =>  'Amigos Mexican Restaurant',
                'description'   => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '41 Friar Street',
                'address2'      =>  '',
                'city'          =>  'Worchester',
                'county'        =>  '',
                'postcode'      =>  'WR1 2NA'
            ]
        );

        Restaurant::firstOrCreate(
            ['name'=>'Lebaneat'], //Lebanese
            [
                'name'          =>  'Lebaneat',
                'description'   =>  $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '47 North Baliey',
                'address2'      =>  '',
                'city'          =>  'Durham',
                'county'        =>  '',
                'postcode'      =>  'DH1 3ET'
            ]
        );
    }
}