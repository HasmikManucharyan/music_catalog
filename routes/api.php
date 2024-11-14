<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\SongController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/artists', [ArtistController::class, 'getArtist']);
Route::get('/albums', [AlbumController::class, 'getAlbum']);
Route::get('/songs', [SongController::class, 'getSongs']);
Route::get('api/documentation', function () {
    return view('swagger.index');
});
