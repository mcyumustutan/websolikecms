<?php

namespace App\Filament\Resources\VefatListResource\Pages;

use App\Filament\Resources\VefatListResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVefatList extends EditRecord
{
    protected static string $resource = VefatListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
