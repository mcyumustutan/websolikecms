<?php

namespace App\Filament\Resources\SolutionCenterResource\Pages;

use App\Filament\Resources\SolutionCenterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSolutionCenter extends EditRecord
{
    protected static string $resource = SolutionCenterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
