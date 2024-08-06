<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VefatListResource\Pages;
use App\Filament\Resources\VefatListResource\RelationManagers;
use App\Models\Vefatlist;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VefatListResource extends Resource
{
    protected static ?string $model = Vefatlist::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Vefat İlanları';
    protected static ?string $modelLabel = 'Vefat İlanı';
    protected static ?string $pluralModelLabel = 'Vefat İlanı';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('adSoyad')
                    ->label('Ad Soyad')
                    ->required()
                    ->maxLength(255),
                TextInput::make('anaBabaAdi')
                    ->label('Ana Baba Adı')
                    ->required()
                    ->maxLength(255),
                DatePicker::make('vefatTarihi')
                    ->label('Vefat Tarihi')
                    ->required()
                    ->displayFormat('d/m/Y'),
                TextInput::make('cenazeYeri')
                    ->label('Cenaze Yeri')
                    ->required()
                    ->maxLength(255),
                TextInput::make('mezarlik')
                    ->label('Mezarlık')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('adSoyad')
                    ->label('Ad Soyad')
                    ->sortable()
                    ->searchable(isIndividual: true),
                TextColumn::make('anaBabaAdi')
                    ->label('Ana Baba Adı')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('vefatTarihi')
                    ->label('Vefat Tarihi')
                    ->date('d/m/Y')
                    ->sortable(),
                TextColumn::make('cenazeYeri')
                    ->label('Cenaze Yeri'),
                TextColumn::make('mezarlik')
                    ->label('Mezarlık'),
                TextColumn::make('created_at')
                    ->label('Oluşturulma Tarihi')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                Filter::make('vefatTarihi')
                    ->label('Son 30 Gün')
                    ->query(fn (Builder $query) => $query->where('vefatTarihi', '>=', now()->subDays(30))),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVefatLists::route('/'),
            'create' => Pages\CreateVefatList::route('/create'),
            'edit' => Pages\EditVefatList::route('/{record}/edit'),
        ];
    }
}
