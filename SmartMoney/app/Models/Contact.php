<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birthday',
        'address',
        'phone',
        'photo',
    ];
    public function belongUser()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
