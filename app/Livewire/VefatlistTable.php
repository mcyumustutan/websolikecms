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
            Column::make("Adı Soyadı", "adSoyad")
                ->searchable()
                ->sortable(),
            Column::make("Ana / Baba Adı", "anaBabaAdi")
                ->searchable()
                ->sortable(),
            Column::make("Vefat Tarihi", "vefatTarihi")
                ->sortable(),
            Column::make("Cenaze Yeri", "cenazeYeri")
                ->sortable(),
            Column::make("Mezarlık", "mezarlik")
                ->sortable(),
        ];
    }
}
