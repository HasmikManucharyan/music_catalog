<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'artist_id', 'release_year'];
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
    public function songs()
    {
        return $this->belongsToMany(Song::class)->withPivot('track_number')->withTimestamps();
    }
}
