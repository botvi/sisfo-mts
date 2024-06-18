<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'content',
        'image',
        'kategori_id',
        'author_id'
    ];

    public function getPublishedAtAttribute()
    {
        return $this->created_at;
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
