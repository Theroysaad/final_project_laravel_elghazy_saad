<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Types;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Types::create([
            'name' => 'Desks',
        ]);

        Types::create([
            'name' => 'Private offices',
        ]);

        Types::create([
            'name' => 'Conference rooms',
        ]);
    }
}
