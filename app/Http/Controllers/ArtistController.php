<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
/**
 * @OA\Components(
 *     @OA\Schema(
 *         schema="Artist",
 *         type="object",
 *         required={"name"},
 *         @OA\Property(property="name", type="string", description="Имя исполнителя"),
 *         @OA\Property(property="albums", type="array", @OA\Items(ref="#/components/schemas/Album"))
 *     )
 * )
 */
class ArtistController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/artists",
     *     summary="Получить список исполнителей",
     *     tags={"Артисты"},
     *     @OA\Response(
     *         response=200,
     *         description="Успешный запрос",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Artist")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Не найдено"
     *     )
     * )
     */
    public function getArtist(){
        return Artist::with('albums.songs')->get();
    }
}
