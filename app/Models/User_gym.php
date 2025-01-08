<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User_gym extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'level',
    ];

    // Relasi ke tabel articles
    public function articles()
    {
        return $this->hasMany(Article::class, 'author_id');
    }

    // Relasi ke tabel comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Relasi ke tabel schedules
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
