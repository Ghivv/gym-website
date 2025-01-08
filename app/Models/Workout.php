<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image_or_video',
    ];

    // Relasi ke tabel schedules
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
