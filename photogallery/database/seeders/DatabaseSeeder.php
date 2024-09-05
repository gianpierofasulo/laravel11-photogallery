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

    /*     User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */

        // RICHIAMO IL SEEDER PER LA TAB USER
        $this->call(UserSeeder::class);

        // ED ANCHE TUTTI  QUELLLI CHE VOGLIO METTERE QUI DENTRO
        // in questo modo partiranno tutti iniseme
        $this->call(AlbumSeeder::class);
        $this->call(PhotoSeeder::class);

    }
}
