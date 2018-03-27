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
            ['name'=>'Infamous Diner'],
            [
                'name'          =>  'Infamous Diner',
                'description'   => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'address1'      =>  '3-5 Basil Chambers Nicholas Croft',
                'address2'      =>  '',
                'city'          =>  'Manchester',
                'county'        =>  '',
                'postcode'      =>  'M4 1EY'
            ]
        );

        Restaurant::firstOrCreate(
            ['name'=>'Los Gatos'],
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
            ['name'=>'Nur'],
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
            ['name'=>'Thai Garden'],
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
            ['name'=>'Amigos Mexican Restaurant'],
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
            ['name'=>'Lebaneat'],
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

// @restaurant5 = Restaurant.where(name: 'Infamous Diner').first_or_create(
//     name: 'Infamous Diner',
//     description: Faker::Lorem.paragraph(8, true, 2),
//     address1: '3-5 Basil Chambers Nicholas Croft',
//     address2: '',
//     city:  'Manchester',
//     county:  '',
//     postcode: 'M4 1EY'
//   )
  
//   @restaurant6 = Restaurant.where(name: 'Los Gatos').first_or_create(
//     name: 'Los Gatos',
//     description: Faker::Lorem.paragraph(7, true, 3),
//     address1: '1-3 Devizes Road',
//     address2: 'Old Town',
//     city:  'Swindon',
//     county:  '',
//     postcode: 'SN4 4BJ'
//   )
  
//   @restaurant7 = Restaurant.where(name: 'Nur').first_or_create(
//     name: 'Nur',
//     description: Faker::Lorem.paragraph(6, true, 4),
//     address1: '1-3 Devizes Road',
//     address2: '',
//     city:  'Glasgow',
//     county:  '',
//     postcode: 'G5 9HR'
//   )
  
//   @restaurant8 = Restaurant.where(name: 'Thai Garden').first_or_create(
//     name: 'Thai Garden',
//     description: Faker::Lorem.paragraph(2, true, 9),
//     address1: '100 West Street',
//     address2: '',
//     city:  'Bristol',
//     county:  '',
//     postcode: 'BS3 3LR'
//   )
  
//   @restaurant9 = Restaurant.where(name: 'Amigos Mexican Restaurant').first_or_create(
//     name: 'Amigos Mexican Restaurant',
//     description: Faker::Lorem.paragraph(5, true, 7),
//     address1: '41 Friar Street',
//     address2: '',
//     city:  'Worchester',
//     county:  '',
//     postcode: 'WR1 2NA'
//   )
  
//   @restaurant10 = Restaurant.where(name: 'Lebaneat').first_or_create(
//     name: 'Lebaneat',
//     description: Faker::Lorem.paragraph(4, true, 8),
//     address1: '47 North Baliey',
//     address2: '',
//     city:  'Durham',
//     county:  '',
//     postcode: 'DH1 3ET'
//   )