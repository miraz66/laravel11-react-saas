<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Feature;
use App\Models\Package;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('1234qwer!A'),
        ]);

        Feature::create([
            'route_name' => 'feature1.index',
            'image' => 'http://static-00.iconduck.com/assets.00/plus-icon-2048x2048-z6v59bd6.png',
            'name' => 'Calculate Sum',
            'description' => 'Calculate sum of two numbers',
            'required_credits' => 1,
            'active' => true,
        ]);

        Feature::create([
            'route_name' => 'feature2.index',
            'image' => 'http://cdn-icons-png.freepik.com/512/929/929430.png',
            'name' => 'Calculate difference',
            'description' => 'Calculate sum of two numbers',
            'required_credits' => 1,
            'active' => true,
        ]);

        Feature::create([
            'route_name' => 'feature3.index',
            'image' => 'https://i.postimg.cc/V67PKYFN/icons8-cancel-750.png',
            'name' => 'Calculate Multiplication',
            'description' => 'Calculate sum of two numbers',
            'required_credits' => 2,
            'active' => true,
        ]);
        
        Feature::create([
            'route_name' => 'feature4.index',
            'image' => 'https://i.postimg.cc/1XPVrrJS/division.png',
            'name' => 'Calculate Division',
            'description' => 'Calculate sum of two numbers',
            'required_credits' => 2,
            'active' => true,
        ]);

        Package::create([
            'name' => 'Basic',
            'price' => 5,
            'credits' => 20
        ]);
        Package::create([
            'name' => 'Silver',
            'price' => 20,
            'credits' => 100
        ]);
        Package::create([
            'name' => 'Gold',
            'price' => 50,
            'credits' => 500
        ]);
    }
}
