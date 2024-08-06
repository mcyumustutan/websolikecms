<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Vefatlist;

class VefatlistTable extends DataTableComponent
{
    protected $model = Vefatlist::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("AdSoyad", "adSoyad")
                ->searchable()
                ->sortable(),
            Column::make("AnaBabaAdi", "anaBabaAdi")
                ->searchable()
                ->sortable(),
            Column::make("VefatTarihi", "vefatTarihi")
                ->sortable(),
            Column::make("CenazeYeri", "cenazeYeri")
                ->sortable(),
            Column::make("Mezarlik", "mezarlik")
                ->sortable(),
        ];
    }
}
