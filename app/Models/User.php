<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = [
        'id',
    ];

    public function products()
    {
        return $this->hasMany(User::class)
            ->orderBy('id', 'desc');
    }
}
