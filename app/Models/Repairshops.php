<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repairshop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'address', 
        'email', 
        'phone', 
        'user_id'
    ];
}