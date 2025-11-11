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

    /**
     * Get the full photo URL, either from Supabase/cloud or local storage
     */
    public function getPhotoUrlAttribute()
    {
        // If using Supabase, prepend your bucket public URL
        if ($this->photo_path) {
            return 'https://ypboqeeentntlesfufxl.supabase.co/storage/v1/object/public/' . $this->photo_path;
        }

        // Fallback: local storage
        if ($this->photo_path && file_exists(storage_path('app/public/' . $this->photo_path))) {
            return asset('storage/' . $this->photo_path);
        }

        return null; // No image available
    }
}
