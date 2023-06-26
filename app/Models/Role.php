<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // protected $table = 'users';
    protected $fillable = [
        'name'
    ];
    use HasFactory;
}
