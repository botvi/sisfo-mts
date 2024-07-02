<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'img_pendaftaran',
        'img_pernyataanperjanjiansantri',
        'img_pernyataanperjanjianorangtua',
        'status'
    ];

    /**
     * Get the user that owns the pendaftaran.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
