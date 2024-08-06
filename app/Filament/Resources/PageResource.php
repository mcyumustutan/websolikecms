<?php

namespace App\Filament\Resources;

use App\Enums\Language;
use App\Enums\TemplateType;
use App\Filament\Resources\PageResource\Pages;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Str;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Filters\SelectFilter;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;
    protected static ?string $modelLabel = "Sayfa";

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Başlık')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->unique(Page::class, 'title', ignoreRecord: true)
                                    ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                                        $set('url', Str::slug($state));
                                    }),

                                Forms\Components\TextInput::make('url')
                                    ->label('URL')
                                    ->readOnly()
                                    ->disabled()
                                    ->dehydrated()
                                    ->required()
                                    ->unique(Page::class, 'url', ignoreRecord: true),

                                Forms\Components\RichEditor::make('content_primary')
                                    ->label('Ana Metin')
                                    ->columnSpan('full'),

                                Forms\Components\RichEditor::make('content_secondary')
                                    ->label('Ek Metin')
                                    ->columnSpan('full'),
                            ])
                            ->columns(2),

                        Forms\Components\Section::make('SEO')
                            ->schema([
                                Forms\Components\TextInput::make('meta_description'),

                                Forms\Components\TextInput::make('meta_keywords'),
                            ])
                            ->columns(2),


                        Forms\Components\Section::make('Öne Çıkan Özel Alanlar')
                            ->schema([
                                Forms\Components\TextInput::make('highlited_value_1')
                                    ->label('Öne Çıkan Alan 1'),

                                Forms\Components\TextInput::make('highlited_icon_1')
                                    ->label('Öne Çıkan Simge 1'),


                                Forms\Components\TextInput::make('highlited_value_2')
                                    ->label('Öne Çıkan Alan 2'),

                                Forms\Components\TextInput::make('highlited_icon_2')
                                    ->label('Öne Çıkan Simge 2'),


                                Forms\Components\TextInput::make('highlited_value_3')
                                    ->label('Öne Çıkan Alan 3'),

                                Forms\Components\TextInput::make('highlited_icon_3')
                                    ->label('Öne Çıkan Simge 3'),

                            ])
                            ->columns(2),



                        Forms\Components\Section::make('Foto Galeri')
                            ->schema([
                                SpatieMediaLibraryFileUpload::make('image_55')
                                    ->label('Galeri Görselleri Yükle')
                                    ->multiple()
                                    ->collection('gallery')
                                    ->acceptedFileTypes(['image/jpeg', 'image/png'])
                                    ->maxFiles(10)
                                    ->imageEditor(),

                            ])
                            ->columnSpan(2),
                        Forms\Components\Section::make('Dosyalar')
                            ->schema([
                                SpatieMediaLibraryFileUpload::make('files_55')
                                    ->label('Sayfa Ekleri Yükle')
                                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                        return (string) str($file->getClientOriginalName())->prepend('ek-');
                                    })
                                    ->multiple()
                                    ->collection('files')
                                    ->acceptedFileTypes(['application/pdf'])
                                    ->maxFiles(10)
                                    ->imageEditor(),

                            ])
                            ->columnSpan(2),


                    ])
                    ->columnSpan(['lg' => 2]),

                Forms\Components\Group::make()
                    ->schema([

                        Forms\Components\Section::make('Ayarlar')
                            ->schema([

                                // Forms\Components\Select::make('Üst Sayfa')
                                //     ->searchable()
                                //     ->default('Yok', 0)
                                //     ->options(Page::all()->pluck('title', 'id')),
                                Forms\Components\Select::make('parent_id')
                                    ->label('Üst Sayfa')
                                    ->nullable()
                                    // ->relationship(name: 'parentPage', titleAttribute: 'title', ignoreRecord: true)
                                    ->options(Page::orderBy('id', 'desc')
                                        ->get()
                                        ->pluck('title', 'id', 'template_type'))
                                    ->searchable()
                                    ->preload(),


                                Forms\Components\Select::make('template_type')
                                    ->label('Sayfa Türü')
                                    ->options(TemplateType::class)
                                    ->required()
                                    ->default('page')
                                    // ->validationMessages([
                                    //     'required' => ':attribute seçimi gereklidir .',
                                    // ])
                                    ->searchable(),



                                Forms\Components\Toggle::make('is_publish')
                                    ->label('Yayınla')
                                    ->helperText('Aktif olduğunda sayfa yayına açık olur.')
                                    ->default(true),

                                Forms\Components\Toggle::make('has_sidebar')
                                    ->label('Kenar Çubuğu')
                                    ->helperText('Aktif olduğunda sağ tarafraki kenar çubuğu aktif olur')
                                    ->default(true),

                                Forms\Components\Toggle::make('has_subpages')
                                    ->label('Alt Sayfalama')
                                    ->helperText('Aktif olduğunda ilgili sayfanın altındaki sayfaları listeler.')
                                    ->default(false),

                                Forms\Components\TextInput::make('ordinal')
                                    ->default(fn ($record) => Page::orderByDesc('ordinal')->first()->ordinal + 1)
                                    ->helperText('En son eklenen kaydın bir fazlasını varsayılan olarak getirir.')
                                    ->label('Sıralama')
                                    ->placeholder('Sıralama'),

                                Forms\Components\Select::make('lang')
                                    ->label('Dil')
                                    ->default('tr')
                                    ->required()
                                    ->options(Language::class)
                                    ->searchable()
                                    ->validationMessages([
                                        'required' => ':attribute seçimi gereklidir .',
                                    ]),

                                Forms\Components\CheckboxList::make('link_view')
                                    ->label("Navigasyon Bölümleri")
                                    ->default(fn ($record) => $record->link_view ?? true)
                                    ->options([
                                        '1' => 'Ana Navigasyon',
                                        '2' => 'Footer Navigasyon Sabit Blok',
                                        '3' => 'Footer Genel Navigasyon',
                                        '4' => 'Diğer',
                                        '50' => 'Keşfet Kutusu',
                                    ]),

                                Forms\Components\CheckboxList::make('box_view')
                                    ->label("Ana Sayfa Kutu Bölümleri")
                                    ->default(fn ($record) => $record->box_view ?? true)
                                    ->options([
                                        '1' => 'Aktiviteler Bölümünde Göster',
                                        '2' => "Story'de Göster",
                                        '100' => 'Diğer',
                                    ]),

                                Forms\Components\CheckboxList::make('widgets')
                                    ->label("Modüller")
                                    ->default(fn ($record) => $record->box_view ?? true)
                                    ->options([
                                        'solutioncenter' => 'Çözüm Merkezi Formu',
                                        'smscsignup' => "SMS Listesi Kayıt Formu",
                                    ]),

                                Forms\Components\DateTimePicker::make('display_date')
                                    ->label('Yayın Tarihi')
                                    ->default(now())
                                    ->native(false)
                                    ->displayFormat('d.m.Y H:i')
                                    ->required(),


                            ])->columns(0),

                        Forms\Components\Section::make('İçerik Görselleri')
                            ->schema([

                                SpatieMediaLibraryFileUpload::make('image_1')
                                    ->label('Kapak Görseli')
                                    ->collection('cover')
                                    ->imageEditor()
                                    ->maxFiles(1),

                                SpatieMediaLibraryFileUpload::make('image_2')
                                    ->label('Banner Görseli')
                                    ->collection('banner')
                                    ->maxFiles(1),

                                SpatieMediaLibraryFileUpload::make('image_3')
                                    ->label('Kutu Görseli')
                                    ->customProperties(['description' => fn (Page $record): string => $record->url])
                                    ->collection('box')
                                    ->maxFiles(1),

                            ]),
                    ])
                    ->columnSpan(['lg' => 1]),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Başlık')
                    ->extraAttributes(['style' => 'white-space: normal; word-wrap: break-word;'])
                    ->searchable(isIndividual: true)
                    ->sortable(),
                Tables\Columns\TextColumn::make('template_type')
                    ->label('İçerik Türü')
                    ->sortable(),
                Tables\Columns\CheckboxColumn::make('has_sidebar')
                    ->label('Kenar Çubuğu'),
                Tables\Columns\CheckboxColumn::make('is_publish')
                    ->label('Yayında'),
                Tables\Columns\CheckboxColumn::make('has_subpages')
                    ->label('Sayfalama'),
                Tables\Columns\ImageColumn::make('cover')
                    ->label('Kapak Görseli'),
                Tables\Columns\TextColumn::make('lang')
                    ->label('Dil')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Eklenme Tarihi')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('display_date')
                    ->label('Yayın Tarihi')
                    ->searchable()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('lang')
                    ->label('Dil')
                    ->options(self::getEnumOptions(Language::class))
                    ->searchable(),
            ])
            ->actions([
                Action::make('view')
                    ->icon('heroicon-m-arrow-top-right-on-square')
                    ->label('Aç')
                    ->url(fn (Page $record): string => route('page.view', $record->lang . "/" . $record->url))
                    ->openUrlInNewTab(),
                Tables\Actions\EditAction::make(),
                // Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    protected static function getEnumOptions(string $enumClass): array
    {
        return collect($enumClass::cases())
            ->mapWithKeys(fn ($enum) => [$enum->name => ucfirst($enum->name)])
            ->toArray();
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Sayfalar';
    }

    public static function getPluralLabel(): string
    {
        return 'Sayfalar'; // Çoğul başlık
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
