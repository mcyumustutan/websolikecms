<?php

namespace App\Filament\Resources;

use App\Enums\PersonType;
use App\Filament\Resources\SmsListResource\Pages;
use App\Filament\Resources\SmsListResource\RelationManagers;
use App\Models\SmsList;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SmsListResource extends Resource
{
    protected static ?string $model = SmsList::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $modelLabel = "SMS Listesi";


    public static function getPluralLabel(): string
    {
        return 'SMS Listesi Kayıtları'; // Çoğul başlık
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\TextInput::make('tamad')
                                    ->label('Ad Soyad')
                                    ->required()
                                    ->disabled()
                                    ->maxLength(255),

                                Forms\Components\DatePicker::make('dogumtarihi')
                                    ->label('Doğum Tarihi')
                                    ->required()
                                    ->disabled(),

                                Forms\Components\TextInput::make('telefon')
                                    ->label('Telefon')
                                    ->required()
                                    ->disabled()
                                    ->maxLength(255)
                                    ->columnSpan('full'),

                                Forms\Components\TextInput::make('tc')
                                    ->label('TC') 
                                    ->numeric()
                                    ->maxLength(10),    

                                Forms\Components\Select::make('is_approved')
                                    ->label('Durum')
                                    ->required()
                                    ->options([
                                        '0' => 'Beklemede',
                                        '1' => 'Onaylı',
                                    ]),

                                Forms\Components\RichEditor::make('not')
                                    ->label('Kurum Notu (Opsiyonel)')
                                    ->columnSpan('full'),
                                Forms\Components\Select::make('type')
                                    ->label('Kişi Türü')
                                    ->options(PersonType::options())
                                    ->required()
                                    ->live(),

                                Forms\Components\TextInput::make('unvan')
                                    ->label('Unvan')
                                    ->visible(fn($get) => $get('type') == PersonType::TUZEL->value)
                                    ->required(fn($get) => $get('type') == PersonType::TUZEL->value)
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('vergi_no')
                                    ->label('Vergi No')
                                    ->visible(fn($get) => $get('type') == PersonType::TUZEL->value)
                                    ->required(fn($get) => $get('type') == PersonType::TUZEL->value)
                                    ->numeric()
                                    ->maxLength(20),

                                Forms\Components\TextInput::make('vergi_dairesi')
                                    ->label('Vergi Dairesi')
                                    ->visible(fn($get) => $get('type') == PersonType::TUZEL->value)
                                    ->required(fn($get) => $get('type') == PersonType::TUZEL->value)
                                    ->maxLength(255),

                                Forms\Components\Textarea::make('adres')
                                    ->label('Adres')
                                    ->rows(3)
                                    ->columnSpanFull(),
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
                Tables\Columns\TextColumn::make('type')
                    ->label('Tür')
                    ->formatStateUsing(fn($state) => $state->label())
                    ->badge()
                    ->color(fn($state) => $state === PersonType::TUZEL ? 'success' : 'gray'),
                Tables\Columns\TextColumn::make('tamad')
                    ->label('Ad')
                    ->extraAttributes(['style' => 'white-space: normal; word-wrap: break-word;'])
                    ->searchable(isIndividual: true)
                    ->sortable(),
                Tables\Columns\TextColumn::make('telefon')
                    ->label('Soyad')
                    ->searchable(isIndividual: true)
                    ->sortable(),
                Tables\Columns\TextColumn::make('dogumtarihi')
                    ->label('Konu')
                    ->searchable(isIndividual: true)
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Kayıt Zamanı')
                    ->searchable(isIndividual: true)
                    ->sortable(),
                Tables\Columns\TextColumn::make('is_approved')
                    ->label('Onaylı mı?')
                    ->searchable(isIndividual: true)
                    ->sortable(),
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
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListSmsLists::route('/'),
            'create' => Pages\CreateSmsList::route('/create'),
            'edit' => Pages\EditSmsList::route('/{record}/edit'),
        ];
    }
}
