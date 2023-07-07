<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'artist',
        'album',
        'genre',
        'title'
    ];

    /**
     * The playlists that belong to the song.
     */
    public function playlists()
    {
        return $this->hasMany(Playlist::class);
    }
}
