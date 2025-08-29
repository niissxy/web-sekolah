<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Tambahkan kolom yang boleh diisi massal
    protected $fillable = [
        'name',
        'email',
        'message',
        // tambahkan kolom lain jika ada
    ];
}
