<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlasticSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'location',
        'kilograms',
        'photo',
    ];
}
