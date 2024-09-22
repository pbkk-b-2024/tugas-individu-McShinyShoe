<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Mohamad Valdi Ananda Tauhid',
            'email' => '5025221238@student.its.ac.id',
            'password' => "secret",
        ]);
        $this->call(ArticleSeeder::class);
    }
}
