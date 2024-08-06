<?php

namespace App\Filament\Resources\SmsListResource\Pages;

use App\Filament\Resources\SmsListResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSmsLists extends ListRecords
{
    protected static string $resource = SmsListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
