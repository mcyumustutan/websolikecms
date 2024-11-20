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
    case Project = 'Project';
    case ProjectFinished = 'ProjectFinished';
    case ProjectOnGoing = 'ProjectOnGoing';
    case ProjectPlanned = 'ProjectPlanned';
    case Event = 'event';
    // case Death = 'death';
    case Module = 'module';
    case Personel = 'personel';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Page => 'Sayfa',
            self::Bid => 'İhale',
            self::News => 'Haber',
            self::Announcement => 'Duyuru',
            self::Contact => 'İletişim',
            self::Project => 'Projeler',
            self::ProjectFinished => 'Tamamlanan Projerler',
            self::ProjectOnGoing => 'Devam Eden Projeler',
            self::ProjectPlanned => 'Planlanan Projeler',
            self::Event => 'Etkinlik',
            // self::Death => 'Vefat İlanları',
            self::Module => 'Modül',
            self::Personel => 'Personel',
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
            self::Project => 'page.project',
            self::ProjectFinished => 'page.project',
            self::ProjectOnGoing => 'page.project',
            self::ProjectPlanned => 'page.project',
            self::Event => 'page.event',
            // self::Death => 'page.death',
            self::Module => 'page.module',
            self::Personel => 'page.personel',
            default => 'page.page',
        };
    }
}
