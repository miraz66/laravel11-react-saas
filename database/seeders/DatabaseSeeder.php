<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Feature;
use App\Models\Package;
use App\Models\Transaction;
use App\Models\UsedFeature;
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

        // Feature::create([
        //     'route_name' => 'feature1.index',
        //     'image' => 'http://static-00.iconduck.com/assets.00/plus-icon-2048x2048-z6v59bd6.png',
        //     'name' => 'Calculate sum',
        //     'description' => 'Calculate sum of two numbers',
        //     'required_created' => 2,
        //     'active' => true,
        // ]);

        // Feature::create([
        //     'route_name' => 'feature2.index',
        //     'image' => 'http://cdn-icons-png.freepik.com/512/929/929430.png',
        //     'name' => 'Calculate sum',
        //     'description' => 'Calculate sum of two numbers',
        //     'required_created' => 3,
        //     'active' => true,
        // ]);

        Package::factory(10)->create();
        Feature::factory(10)->create();
        Transaction::factory(10)->create();
        UsedFeature::factory(10)->create();
    }
}
