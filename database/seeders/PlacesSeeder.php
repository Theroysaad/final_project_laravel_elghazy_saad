<?php

namespace Database\Seeders;

use App\Models\Places;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Places::insert([
            [
                'name'=>'Desks',
                'image'=> 'img/desks.jpg' ,
                'price'=>25,
                'description'=>'bsfkzhvjbkzgqds,ehezjtbkzku',
            ],
            [
                'name'=>'Conference Rooms',
                'image'=>'img/about2.jpg',
                'price'=>30,
                'description'=>'bsfkzhvjbkzgqds,ehezjtbkzku',
            ],
            [
                'name'=>'Private Offices',
                'image'=>'img/about2.jpg',
                'price'=>35,
                'description'=>'bsfkzhvjbkzgqds,ehezjtbkzku',
            ],
        ]);
    }
}


