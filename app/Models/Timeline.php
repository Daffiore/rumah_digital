<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class timeline extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'divisi',
        'title',
        'description',
        'status',
        'published_at',
        'start_date',
        'finished_date'
    ];
}
