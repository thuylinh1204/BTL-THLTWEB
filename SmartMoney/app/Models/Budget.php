<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Budget extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'amount',
        'currency',
        'recurrence',
        'start_date',
        'reminder',
        'end_date',
        'user_id',

    ];
    public function budget_user()
    {
        return $this->belongsTo(Budget::class, 'user_id', 'id');
    }
}
