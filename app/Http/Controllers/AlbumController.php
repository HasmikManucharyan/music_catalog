<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

/**
 * @OA\Schema(
 *     schema="Album",
 *     type="object",
 *     required={"title", "release_year"},
 *     @OA\Property(property="title", type="string", description="Название альбома"),
 *     @OA\Property(property="release_year", type="integer", description="Год выпуска"),
 *     @OA\Property(property="songs", type="array", @OA\Items(ref="#/components/schemas/Song")),
 * )
 */
class AlbumController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/albums",
     *     summary="Получить список альбомов",
     *     tags={"Альбомы"},
     *     @OA\Response(
     *         response=200,
     *         description="Успешный запрос",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Album")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Не найдено"
     *     )
     * )
    */
    public function getAlbum(){
        return Album::with('songs')->get();
    }
}
