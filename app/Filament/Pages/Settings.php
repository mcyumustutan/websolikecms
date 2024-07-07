<?php

namespace App\Filament\Pages;

use App\Models\Settings as ModelsSettings;
use Filament\Pages\Page;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Filament\Notifications\Notification;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Genel Ayarlar';
    protected ?string $heading = 'Genel Ayarlar';

    protected static string $view = 'filament.pages.settings';

    public Collection $tabs;

    public function mount()
    {
        $settings = ModelsSettings::all()->keyBy('key');
        // Dinamik olarak eklenebilecek tab'leri burada tanımlayın
        $this->tabs = collect([
            [
                'label' => 'Site Ayarlar',
                'content' => [
                    ['content' => $settings->get(Str::slug('Site Başlığı'))->value ?? '', 'text_label' => 'Site Başlığı'],
                    ['content' => $settings->get(Str::slug('Sabit Telefon Numarası'))->value ?? '', 'text_label' => 'Sabit Telefon Numarası'],
                    ['content' => $settings->get(Str::slug('Mobil Telefon Numarası'))->value ?? '', 'text_label' => 'Mobil Telefon Numarası'],
                    ['content' => $settings->get(Str::slug('E-Posta'))->value ?? '', 'text_label' => 'E-Posta'],
                    ['content' => $settings->get(Str::slug('Adres'))->value ?? '', 'text_label' => 'Adres'],
                    ['content' => $settings->get(Str::slug('Harita Kodu (iframe)'))->value ?? '', 'text_label' => 'Harita Kodu (iframe)'],
                    ['content' => $settings->get(Str::slug('Anahtar Kelimeler'))->value ?? '', 'text_label' => 'Anahtar Kelimeler'],
                    ['content' => $settings->get(Str::slug('Site Açıklaması'))->value ?? '', 'text_label' => 'Site Açıklaması'],
                ]
            ],
            [
                'label' => 'Sosyal Medya Bağlantılar',
                'content' => [
                    ['content' => $settings->get(Str::slug('Whatsapp'))->value ?? '', 'text_label' => 'Whatsapp'],
                    ['content' => $settings->get(Str::slug('instagram.com'))->value ?? '', 'text_label' => 'instagram.com'],
                    ['content' => $settings->get(Str::slug('x.com'))->value ?? '', 'text_label' => 'x.com'],
                    ['content' => $settings->get(Str::slug('tiktok.com'))->value ?? '', 'text_label' => 'tiktok.com'],
                    ['content' => $settings->get(Str::slug('youtube.com'))->value ?? '', 'text_label' => 'youtube.com'],
                    ['content' => $settings->get(Str::slug('facebook.com'))->value ?? '', 'text_label' => 'facebook.com'],
                ]
            ],
            [
                'label' => 'Güvenlik Parametreleri',
                'content' => [
                    ['content' => $settings->get(Str::slug('Google Recaptcha Public'))->value ?? '', 'text_label' => 'Google Recaptcha Public'],
                    ['content' => $settings->get(Str::slug('Google Recaptcha Private'))->value ?? '', 'text_label' => 'Google Recaptcha Private'],
                ]
            ],
            [
                'label' => 'Analitik Parametreleri',
                'content' => [

                    ['content' => $settings->get(Str::slug('Google Analytics Kodu'))->value ?? '', 'text_label' => 'Google Analytics Kodu'],
                    ['content' => $settings->get(Str::slug('Facebook Pixel Kodu'))->value ?? '', 'text_label' => 'Facebook Pixel Kodu'],
                    ['content' => $settings->get(Str::slug('Yandex Metrica Kodu'))->value ?? '', 'text_label' => 'Yandex Metrica Kodu'],
                    ['content' => $settings->get(Str::slug('Bing Webmaster Kodu'))->value ?? '', 'text_label' => 'Bing Webmaster Kodu'],
                ]
            ],

        ]);
    }

    protected function getFormSchema(): array
    {
        return [
            Tabs::make('dynamicTabs')
                ->tabs(
                    $this->tabs->map(function ($tab, $index) {
                        return Tab::make($tab['label'])
                            ->schema([
                                Repeater::make("tabs.{$index}.content")
                                    ->schema([
                                        Textarea::make('content')
                                            ->label(fn ($get) => $get('text_label')),
                                    ])
                                    ->label($tab['label'])
                                    ->defaultItems(1)
                                    ->minItems(1)
                                    ->addActionLabel('Yeni Alan Ekle')
                                    ->addable(false)
                                    ->deletable(false)
                                    ->reorderable(false)
                                    ->grid(2),
                            ]);
                    })->toArray()
                ),
        ];
    }

    public function addTab()
    {
        $this->tabs->push(['label' => 'New Tab', 'content' => [
            ['text' => 'Content for TextInput 1 in New Tab']
        ]]);
    }

    public function save()
    {
        $this->validate();

        foreach ($this->tabs as $tab) {
            foreach ($tab['content'] as $input) {
                ModelsSettings::updateOrCreate(
                    ['key' => Str::slug($input['text_label'])],
                    ['value' => $input['content']]
                );
            }
        }
        Notification::make()
            ->title('Ayarlar Kaydedildi.')
            ->icon('heroicon-o-document-text')
            ->iconColor('success')
            ->send();
    }
}
