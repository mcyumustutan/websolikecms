<?php

namespace App\Filament\Resources\PageResource\Pages;

use App\Enums\TemplateType;
use App\Filament\Resources\PageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Components\Tab;

class ListPages extends ListRecords
{
    protected static string $resource = PageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }


    public function getTabs(): array
    {

        $my_arr = [
            'all' => Tab::make('Tümü'),

        ];
        $my_types = TemplateType::cases();

        foreach ($my_types as $value) {
            $my_arr[$value->value] = Tab::make($value->getLabel())
                ->modifyQueryUsing(fn (Builder $query) => $query
                    ->where('template_type', $value->value));
        }

        return $my_arr;
    }
}
