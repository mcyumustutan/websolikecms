<?php

namespace App\Enums;

enum PersonType: int
{
    case GERCEK = 0;
    case TUZEL  = 1;

    public function label(): string
    {
        return match ($this) {
            self::GERCEK => 'Gerçek Kişi',
            self::TUZEL  => 'Tüzel Kişi',
        };
    }

    public static function options(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn ($case) => [$case->value => $case->label()])
            ->toArray();
    }
}
