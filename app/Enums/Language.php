<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum Language: string implements HasLabel
{
    case en = 'en';
    case tr = 'tr';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::tr => 'Türkçe',
            self::en => 'İngilizce',
        };
    }
}
