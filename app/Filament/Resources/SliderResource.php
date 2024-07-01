<?php

namespace App\Filament\Resources;

use App\Enums\Language;
use App\Filament\Resources\SliderResource\Pages;
use App\Filament\Resources\SliderResource\RelationManagers;
use App\Models\Slider;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class SliderResource extends Resource
{
    protected static ?string $model = Slider::class;
    protected static ?string $modelLabel = "Slider";

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->label('Başlık')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('img_url')
                    ->label('Dosya')
                    ->disk('sliders')
                    ->required()
                    ->preserveFilenames()
                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                        return (string) str($file->getClientOriginalName())->prepend('slider-');
                    })
                    ->imageEditor()
                    ->maxFiles(1),
                Forms\Components\TextInput::make('info')
                    ->label('Bilgi')
                    ->maxLength(255),
                Forms\Components\TextInput::make('position')
                    ->label('Sıralama')
                    ->required(),
                Forms\Components\Checkbox::make('is_publish')
                    ->label('Yayınla')
                    ->default(1),
                Forms\Components\Textarea::make('style')
                    ->label('Css Style')
                    ->nullable(),
                Forms\Components\TextInput::make('external_link')
                    ->label('Bağlantı')
                    ->maxLength(255),
                Forms\Components\Select::make('lang')
                    ->label('Dil')
                    ->default('tr')
                    ->required()
                    ->options(Language::class)
                    ->searchable()
                    ->validationMessages([
                        'required' => ':attribute seçimi gereklidir .',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Başlık'),
                Tables\Columns\TextColumn::make('position')->label('Sıralama'),
                Tables\Columns\BooleanColumn::make('is_publish')->label('Yayın Durumu'),
                Tables\Columns\TextColumn::make('lang')->label('Dil'),
            ])
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
            'index' => Pages\ListSliders::route('/'),
            'create' => Pages\CreateSlider::route('/create'),
            'edit' => Pages\EditSlider::route('/{record}/edit'),
        ];
    }
}
