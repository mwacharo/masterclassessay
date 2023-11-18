<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Profile extends Model
{
    use HasFactory;
    use HasFactory, Notifiable, SoftDeletes; 
    protected $fillable = [
        'user_id',
        'role',
        'headline',
        'description',
        'skills',
        'portfolio',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
