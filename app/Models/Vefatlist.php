<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
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
        'cenazeZamani',
        'mezarlik',
    ];

    protected $casts = [
        'vefatTarihi' => 'date',
    ];

    protected function vefatTarihi(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Carbon::parse($value)->format('d.m.Y')
        );
    }
}
