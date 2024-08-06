<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SolutionCenterResource\Pages;
use App\Filament\Resources\SolutionCenterResource\RelationManagers;
use App\Models\SolutionCenter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SolutionCenterResource extends Resource
{
    protected static ?string $model = SolutionCenter::class;
    protected static ?string $modelLabel = "Çözüm Merkezi";

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canDelete($model): bool
    {
        return false;
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\TextInput::make('ad')
                                    ->label('Ad')
                                    ->required()
                                    ->disabled()
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('soyad')
                                    ->label('Soyad')
                                    ->required()
                                    ->disabled()
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('mesaj_konusu')
                                    ->label('Mesaj Konusu')
                                    ->required()
                                    ->disabled()
                                    ->maxLength(255)
                                    ->columnSpan('full'),


                                Forms\Components\Textarea::make('mesaj')
                                    ->label('Mesaj')
                                    ->disabled()
                                    ->columnSpan('full'),

                                Forms\Components\Select::make('status')
                                    ->label('Durum')
                                    ->required()
                                    ->options([
                                        '0' => 'Beklemede',
                                        '1' => 'Çözüldü',
                                        '2' => 'İptal',
                                    ]),

                                Forms\Components\RichEditor::make('not')
                                    ->label('Kurum Notu (Çözüm ile ilgili notlar)')
                                    ->columnSpan('full'),

                            ])
                            ->columns(2),







                    ])
                    ->columnSpan(['lg' => 2]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ad')
                    ->label('Ad')
                    ->extraAttributes(['style' => 'white-space: normal; word-wrap: break-word;'])
                    ->searchable(isIndividual: true)
                    ->sortable(),
                Tables\Columns\TextColumn::make('soyad')
                    ->label('Soyad')
                    ->searchable(isIndividual: true)
                    ->sortable(),
                Tables\Columns\TextColumn::make('mesaj_konusu')
                    ->label('Konu')
                    ->searchable(isIndividual: true)
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Mesaj Zamanı')
                    ->searchable(isIndividual: true)
                    ->sortable(),
                // Tables\Columns\TextColumn::make('status')
                //     ->label('Durum')
                //     ->searchable(isIndividual: true)
                //     ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPluralLabel(): string
    {
        return 'Çözüm Merkezi Mesajları'; // Çoğul başlık
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSolutionCenters::route('/'),
            'create' => Pages\CreateSolutionCenter::route('/create'),
            'edit' => Pages\EditSolutionCenter::route('/{record}/edit'),
        ];
    }
}
