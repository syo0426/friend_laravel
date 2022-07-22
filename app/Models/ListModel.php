<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListModel extends Model
{
    use HasFactory;
    protected $table = 'lists';
    protected $fillable = [
        'title',
        'genre',
        'place',
        'detail',
    ];
}
