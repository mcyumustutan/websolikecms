<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolutionCenter extends Model
{
    use HasFactory;

    protected $fillable = [
        'ad',
        'soyad',
        'telefon',
        'eposta',
        'mesaj_konusu',
        'mesaj',
        'not',
        'status',
    ];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->getRawOriginal("display_date"))->timezone('Europe/Istanbul')->format('d.m.Y H:i');
    }
}
