<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
{
    // 1. Your professional login for the demo
    \App\Models\User::factory()->create([
        'name' => 'Group 6 Admin',
        'email' => 'group6@ccc.edu.ph',
        'password' => bcrypt('password123'), // You will type this in Postman
    ]);

    // 2. Generate the required 1,000 records
    \App\Models\Event::factory(100)->create();
    \App\Models\Participant::factory(900)->create();
    
    // Total: 1,001 records. Requirement satisfied!
}
}