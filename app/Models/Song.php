<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Song extends Model
{
    use HasFactory;

    protected $fillable = ['title'];
    public function albums()
    {
        return $this->belongsToMany(Arbum::class)->withPivot('track_number')->withTimestamps();
    }
}
