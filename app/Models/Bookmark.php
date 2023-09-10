<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;

    /**
     * Get the picture associated with the bookmark (if exist ->optional).
     */
    public function picture()
    {
        return $this->belongsTo(Picture::class)->optional();
    }

    /**
     * Get the movie associated with the bookmark (if exist ->optional).
     */
    public function movie()
    {
        return $this->belongsTo(Movie::class)->optional();
    }
}
