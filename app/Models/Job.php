<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Job extends Model
{
    use HasFactory;
    use HasFactory, Notifiable, SoftDeletes; 
    protected $fillable = [
        'client_id',
        'freelancer_id',
        'title',
        'description',
        'budget',
        'deadline',
        'status',
    ];

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function freelancer()
    {
        return $this->belongsTo(User::class, 'freelancer_id');
    }

    public function proposals()
    {
        return $this->hasMany(Proposal::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
