<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmSession extends Model
{
    use HasFactory;

    protected $fillable = [
      'film_id',
      'arena_id',
      'start_time',
      'price',
      'is_delete'
    ];
}
