<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

/**
 * @OA\Schema(
 *     schema="Song",
 *     type="object",
 *     required={"title", "track_number"},
 *     @OA\Property(property="title", type="string", description="Название песни"),
 *     @OA\Property(property="track_number", type="integer", description="Порядковый номер в альбоме")
 * )
 */
class SongController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/songs",
     *     summary="Песни",
     *     tags={"Песни"},
     *     @OA\Response(
     *         response=200,
     *         description="Успешный запрос",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Song")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Не найдено"
     *     )
     * )
     */
    public function getSongs(){
        return Song::all();
    }
}
