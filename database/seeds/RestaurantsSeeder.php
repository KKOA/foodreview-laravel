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
        $restaurantImg = '/imgs/restaurants/';
        $faker = Faker\Factory::create();



        $restaurant1 = Restaurant::firstOrCreate(
            ['name'=>'El Greco'], //Greek
            [
                'name'          =>  'El Greco',
                'slug'          =>  'el-greco',
                'description'   => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '27 Rother Street',
                'address2'      =>  '',
                'city'          =>  'Stratford-upon-Avon',
                'county'        =>  '',
                'postcode'      =>  'CV37 6QB'
            ]
        );
        $restaurant2 = Restaurant::firstOrCreate(
            ['name'=>'Reubens'], //Russina
            [
                'name'          =>  'Reubens',
                'slug'          =>  'reubens',
                'description'   => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '79 Baker Street',
                'address2'      =>  '',
                'city'          =>  'London',
                'county'        =>  '',
                'postcode'      =>  'W1U 6AG'
            ]
        );
        $restaurant3 = Restaurant::firstOrCreate(
            ['name'=>'Laduree UK'], //Swedish
            [
                'name'          =>  'Laduree UK',
                'slug'          =>  'laduree-uk',
                'description'   => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '71 Burlington Arcade',
                'address2'      =>  '',
                'city'          =>  'London',
                'county'        =>  '',
                'postcode'      =>  'W1J 0QX'
            ]
        );
        $restaurant4 = Restaurant::firstOrCreate(
            ['name'=>'Sorrentino Restaurant'], //Italien
            [
                'name'          =>  'Sorrentino Restaurant',
                'slug'          =>  'sorrentino-restaurant',
                'description'   => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '64 Gold Street',
                'address2'      =>  '',
                'city'          =>  'Northampton',
                'county'        =>  '',
                'postcode'      =>  'NN1 1RS'
            ]
        );
        $restaurant5 = Restaurant::firstOrCreate(
            ['name'=>'Makara'], //Turkish
            [
                'name'          =>  'Makara',
                'slug'          =>  'makara',
                'description'   => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '28 Church Road',
                'address2'      =>  '',
                'city'          =>  'Hove',
                'county'        =>  '',
                'postcode'      =>  'BN3 2FN'
            ]
        );
        $restaurant6 = Restaurant::firstOrCreate(
            ['name'=>'Tenkaichi'], //Japanense
            [
                'name'          =>  'Tenkaichi',
                'slug'          =>  'tenkaichi',
                'description'   =>  $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '236 City Road',
                'address2'      =>  '',
                'city'          =>  'Cardiff',
                'county'        =>  '',
                'postcode'      =>  'CF24 3JJ'
            ]
        );

        $restaurant7 = Restaurant::firstOrCreate(
            ['name'=>'Bear & Billet'],//German
            [
                'name'          =>  'Bear & Billet',
                'slug'          =>  'bear-&-billet',
                'description'   =>  $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '94 Lower Bridge Street',
                'address2'      =>  '',
                'city'          =>  'Chester',
                'county'        =>  '',
                'postcode'      =>  'CH1 1RU'
            ]
        );

        $restaurant8 = Restaurant::firstOrCreate(
            ['name'=>'Akamba'], //African
            [
                'name'          =>  'Akamba',
                'slug'          =>  'akamba',
                'description'   => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  'Tythe Barn Lane',
                'address2'      =>  '',
                'city'          =>  'Solihull',
                'county'        =>  '',
                'postcode'      =>  'B90 1PH'
            ]
        );
        $restaurant9 = Restaurant::firstOrCreate(
            ['name'=>'Bistro Jacques'],//French
            [
                'name'          =>  'Bistro Jacques',
                'slug'          =>  'bistro-jacques',
                'description'   =>  $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '29 Claremount Street',
                'address2'      =>  '',
                'city'          =>  'Shrewsbury',
                'county'        =>  '',
                'postcode'      =>  'SY1 1RD'
            ]
        );
        $restaurant10 = Restaurant::firstOrCreate( //American
            ['name'=>'Infamous Diner'],
            [
                'name'          =>  'Infamous Diner',
                'slug'          =>  'infamous-diner',
                'description'   =>  $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '3-5 Basil Chambers Nicholas Croft',
                'address2'      =>  '',
                'city'          =>  'Manchester',
                'county'        =>  '',
                'postcode'      =>  'M4 1EY'
            ]
        );

        $restaurant11 = Restaurant::firstOrCreate(
            ['name'=>'Los Gatos'], //Spanish
            [
                'name'          =>  'Los Gatos',
                'slug'          =>  'los-gatos',
                'description'   =>  $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '1-3 Devizes Road',
                'address2'      =>  'Old Town',
                'city'          =>  'Swindon',
                'county'        =>  '',
                'postcode'      =>  'SN4 4BJ'
            ]
        );

        $restaurant12 = Restaurant::firstOrCreate(
            ['name'=>'Nur'], //Egyptian
            [
                'name'          =>  'Nur',
                'slug'          =>  'nur',
                'description'   =>  $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '22 Bridge Street',
                'address2'      =>  '',
                'city'          =>  'Glasgow',
                'county'        =>  '',
                'postcode'      =>  'G5 9HR'
            ]
        );

        $restaurant13 = Restaurant::firstOrCreate(
            ['name'=>'Thai Garden'], //Thai
            [
                'name'          =>  'Thai Garden',
                'slug'          =>  'thai-garden',
                'description'   =>  $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '100 West Street',
                'address2'      =>  '',
                'city'          =>  'Bristol',
                'county'        =>  '',
                'postcode'      =>  'BS3 3LR'
            ]
        );

        $restaurant14 = Restaurant::firstOrCreate(
            ['name'=>'Amigos Mexican Restaurant'], //Mexican
            [
                'name'          =>  'Amigos Mexican Restaurant',
                'slug'          =>  'amigos-mexican-restaurant',
                'description'   => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '41 Friar Street',
                'address2'      =>  '',
                'city'          =>  'Worchester',
                'county'        =>  '',
                'postcode'      =>  'WR1 2NA'
            ]
        );

        $restaurant15 = Restaurant::firstOrCreate(
            ['name'=>'Lebaneat'], //Lebanese
            [
                'name'          =>  'Lebaneat',
                'slug'          =>  'lebaneat',
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