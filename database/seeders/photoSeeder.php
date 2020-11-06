<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class photoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            'id'=> 1,
            'photographer_id'=> 1,
            'title' => 'Nandhaka Pieris' ,
            
            'date' => '2015-05-01',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'img' => 'img/landscape1.jpg',
            'featured' => true,
        ]);
        DB::table('photos')->insert([
            'id'=> 2,
            'photographer_id'=> 1,
            'title' => 'New West Calgary' ,
            
            'date' => '2016-05-01',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'img' => 'img/landscape2.jpg',
            'featured' => false,
        ]);
        DB::table('photos')->insert([
            'id'=> 3,
            'photographer_id'=> 1,
            'title' => 'Australian Landscape' ,
            
            'date' => '2016-05-01',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'img' => 'img/landscape3.jpg',
            'featured' => false,
        ]);
        DB::table('photos')->insert([
            'id'=> 4,
            'photographer_id'=> 1,
            'title' => 'Halvergate Marsh' ,
            
            'date' => '2016-05-01',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'img' => 'img/landscape4.jpg',
            'featured' => false,
        ]);
    }
}
