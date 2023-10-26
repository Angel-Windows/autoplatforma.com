<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $connection = 'second_db';

    protected $factory = Post::class;
    public function getPublishedAtAttribute($value)
    {
        return Carbon::parse($value)->format('F j, Y g:ia');
    }
}
