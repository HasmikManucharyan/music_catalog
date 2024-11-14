<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    public function run()
    {
        // Создаем 10 случайных альбомов
        Album::factory(10)->create();
    }
}

