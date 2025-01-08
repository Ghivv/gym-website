<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
        'category',
        'author_id',
    ];


    // Relasi ke tabel users_gym (author)
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // Relasi ke tabel comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
