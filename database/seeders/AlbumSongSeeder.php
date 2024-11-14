<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Song;
use Illuminate\Database\Seeder;

class AlbumSongSeeder extends Seeder
{
    public function run()
    {
        // Get all albums and songs
        $albums = Album::all();
        $songs = Song::all();

        // Iterate through albums and attach songs to them
        foreach ($albums as $album) {
            foreach ($songs as $index => $song) {
                $album->songs()->attach($song->id, ['track_number' => $index + 1]);
            }
        }
    }
}
