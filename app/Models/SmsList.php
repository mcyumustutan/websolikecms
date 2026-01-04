<?php

namespace App\Models;

use App\Enums\PersonType;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class SmsList extends Model
{
    use HasFactory;

    protected $fillable = [
        'tamad',
        'telefon',
        'dogumtarihi',
        'not',
        'is_approved',
        'type',
        'adres',
        'unvan',
        'tc',
        'vergi_no',
        'vergi_dairesi',
    ];

    protected $casts = [
        'type' => PersonType::class,
    ];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->getRawOriginal("created_at"))->timezone('Europe/Istanbul')->format('d.m.Y H:i');
    }

    protected function dogumTarihi(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => Carbon::parse($value)->format('d.m.Y'),
            set: fn(string $value) => Carbon::parse($value)->format('Y-m-d'),
        );
    }
}
