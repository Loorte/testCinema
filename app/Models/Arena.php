<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arena extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'count_line',
      'count_point',
      'is_delete'
    ];

    protected $appends = [
      'get_count'
    ];

    public function getGetCountAttribute() {
      return $this->count_line * $this->count_point;
    }
}
