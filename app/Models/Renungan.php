<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renungan extends Model
{
    use HasFactory;

    protected $dateFormat = 'Y-m-d H:i:s';
    protected $fillable = [
        'judul',
        'bacaan_alkitab',
        'thumbnail',
        'isi_bacaan',
        'slug',
    ];
}
