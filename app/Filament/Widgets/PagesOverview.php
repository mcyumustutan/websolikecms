<?php

namespace App\Filament\Widgets;

use App\Enums\TemplateType;
use App\Models\Page;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables\Actions\Action;

class PagesOverview extends BaseWidget
{
    public function getColumns(): int | string | array
    {
        return 2;
    }

    public function table(Table $table): Table
    {
        return $table
            ->heading('Son Eklenen Sayfalar')
            ->query(
                // Page::latest()->where('template_type', TemplateType::Announcement)->limit(5)
                Page::where('is_publish', true)->latest()->take(5)
            )
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Başlık')
                    ->extraAttributes(['style' => 'white-space: normal; word-wrap: break-word;'])
                    ->searchable(isIndividual: true),
                Tables\Columns\TextColumn::make('template_type')
                    ->label('İçerik Türü'),
                Tables\Columns\TextColumn::make('display_date')
                    ->label('Yayın Tarihi'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Eklenme Tarihi'),
            ])->actions([
                Action::make('view')
                    ->icon('heroicon-m-arrow-top-right-on-square')
                    ->label('Aç')
                    ->url(fn (Page $record): string => route('page.view', $record->lang . "/" . $record->url))
                    ->openUrlInNewTab(),
                Tables\Actions\EditAction::make(),
            ]);
    }
}
