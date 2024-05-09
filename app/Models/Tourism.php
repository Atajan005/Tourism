<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tourism extends Model
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
