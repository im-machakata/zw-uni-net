<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::query()->create([
            'name' => 'admin',
            'email' => 'admin@localhost',
            'password' => 'admin',
            'email_verified_at' => now(),
            'type' => 'university'
        ]);
        $this->call(InstitutionSeeder::class);
    }
}
