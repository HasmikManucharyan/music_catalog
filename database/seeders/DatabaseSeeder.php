<?php

namespace Database\Seeders;

use App\Models\Artist;
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

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
        $this->call(AlbumSeeder::class);
        $this->call(ArtistSeeder::class);
        $this->call(SongSeeder::class);
        $this->call(AlbumSongSeeder::class);

    }
}
