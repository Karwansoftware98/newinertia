<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(30)->create();
        User::create([
        'name' => 'karwan',
        'email' => 'karwan@gmail.com',
        'password' => 'karwan'
    ]);
    }
}
