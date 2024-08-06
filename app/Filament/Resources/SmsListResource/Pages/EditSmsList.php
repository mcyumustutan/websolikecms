<?php

namespace App\Filament\Resources\SmsListResource\Pages;

use App\Filament\Resources\SmsListResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSmsList extends EditRecord
{
    protected static string $resource = SmsListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
