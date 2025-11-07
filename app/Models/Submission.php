<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'location',
        'kilograms',
        'photo_path', // Standardized to 'photo_path'
    ];
}