<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'NIK', 'NAMA_LENGKAP', 'ALAMAT', 'NOMOR_HP'
    ];
}