<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'user_gym_id',
        'content',
    ];

    // Relasi ke tabel article
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    // Relasi ke tabel user_gym
    public function user_gym()
    {
        return $this->belongsTo(User_gym::class);
    }
}
