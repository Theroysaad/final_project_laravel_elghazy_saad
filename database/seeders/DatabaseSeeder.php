<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Stripe\Service\PlanService;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();



        $admin = User::factory()->create([
            'name' => 'Saad',
            'email' => 'saad@gmail.com',
            'password' => Hash::make('123456789'), // Replace 'password' with your desired password
            'role' => 'admin', // Set the role to 'admin'
        ]);

        Role::insert([
            [
                "name" => "admin",
                "guard_name" => "web"
            ],
            [
                "name" => "client",
                "guard_name" => "web"
            ],
        ]);

        $admin->assignRole("admin");

        $this->call([
            TypesSeeder::class,
            
        ]);
    }
}
