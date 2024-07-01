<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum TemplateType: string implements HasLabel
{
    case Page = 'page';
    case Bid = 'bid';
    case News = 'news';
    case Announcement = 'announcement';
    case Contact = 'contact';
    case ProjectFinished = 'ProjectFinished';
    case ProjectOnGoing = 'ProjectOnGoing';
    case ProjectPlanned = 'ProjectPlanned';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Page => 'Sayfa',
            self::Bid => 'İhale',
            self::News => 'Haber',
            self::Announcement => 'Duyuru',
            self::Contact => 'İletişim',
            self::ProjectFinished => 'Biten Projerler',
            self::ProjectOnGoing => 'Devam Eden Projeler',
            self::ProjectPlanned => 'Planlanan Projeler',
        };
    }

    public function view(): string
    {
        return match ($this) {
            self::Page => 'page.page',
            self::Bid => 'page.bid',
            self::News => 'page.news',
            self::Announcement => 'page.announcement',
            self::Contact => 'page.contact',
            self::ProjectFinished => 'page.project',
            self::ProjectOnGoing => 'page.project',
            self::ProjectPlanned => 'page.project',
            default => 'page.page',
        };
    }
}
