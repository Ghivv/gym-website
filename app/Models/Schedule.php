<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_gym_id',
        'workout_id',
        'date',
    ];

    // Relasi ke tabel user_gym
    public function user_gym()
    {
        return $this->belongsTo(User_gym::class);
    }

    // Relasi ke tabel workout
    public function workout()
    {
        return $this->belongsTo(Workout::class);
    }
}
