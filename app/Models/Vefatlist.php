<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vefatlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'adSoyad',
        'anaBabaAdi',
        'vefatTarihi',
        'cenazeYeri',
        'mezarlik',
    ];

    protected $casts = [
        'vefatTarihi' => 'date',
    ];
}
