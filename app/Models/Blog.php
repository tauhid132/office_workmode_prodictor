<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'posted_by',
        'status',
        'title',
        'body',
        'cover_image',
        'slug',
        'likes',
        'views',
    ];

    public function author(){
        return $this->belongsTo(User::class, 'posted_by', 'id');
    }
}
