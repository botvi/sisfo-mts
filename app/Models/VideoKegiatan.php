<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoKegiatan extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',  'youtube_link' // Ensure the field name matches the form input name
    ];
}
