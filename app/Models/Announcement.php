<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Announcement extends Model
{
     use SoftDeletes;
    protected $fillable = [
        'user_id',
        'divisi',
        'title',
        'description',
        'status',
        'published_at',
        'created_at'
    ];
}
