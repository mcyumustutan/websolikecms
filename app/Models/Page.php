<?php

namespace App\Models;

use App\Enums\TemplateType;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Config;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class Page extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('is_publish', function (Builder $builder) {
            $builder->where('is_publish', true);
        });
    }

    protected $appends = ['display_date_original', 'fullurl', 'display_only_date', 'display_only_hour'];

    protected $casts = [
        'is_publish' => 'boolean',
        'link_view' => 'array',
        'box_view' => 'array',
        'widgets' => 'array',
        'template_type' => TemplateType::class,
    ];

    protected $fillable = [
        'parent_id',
        'url',
        'title',
        'external_link',
        'content_primary',
        'content_secondary',
        'display_date',
        'template_type',
        'lang',
        'is_publish',
        'is_clickable',
        'image_1',
        'image_2',
        'image_3',
        'meta_description',
        'meta_keywords',
        'ordinal',
        'componen',
        'album',
        'album_2',
        'video',
        'link_view',
        'box_view',
        'highlited_value_1',
        'highlited_value_2',
        'highlited_value_3',
        'highlited_icon_1',
        'highlited_icon_2',
        'highlited_icon_3',
        'has_sidebar',
        'has_subpages',
        'tab_1_title',
        'tab_1_content',
        'tab_2_title',
        'tab_2_content',
        'tab_3_title',
        'tab_3_content',
        'tab_4_title',
        'tab_4_content',
        'tab_5_title',
        'tab_5_content',
        'accordion_1_title',
        'accordion_1_content',
        'accordion_2_title',
        'accordion_2_content',
        'accordion_3_title',
        'accordion_3_content',
        'accordion_4_title',
        'accordion_4_content',
        'accordion_5_title',
        'accordion_5_content',
        'badges',
        'badges_2',
        'widgets'
    ];

    public function getShortContentAttribute()
    {
        return Str::limit($this->title, 65, '...');
    }

    // İlişkiyi optimize etme
    public function parentPage(): HasOne
    {
        return $this->hasOne(Page::class, 'id', 'parent_id')->select('id', 'parent_id', 'lang', 'title', 'url');
    }

    public function sub(): HasMany
    {
        return $this->hasMany(Page::class, 'parent_id', 'id')
            ->select(
                'id',
                'parent_id',
                'lang',
                'title',
                'url',
                'display_date',
                'highlited_value_1',
                'highlited_value_2',
                'highlited_value_3',
                'highlited_icon_1',
                'highlited_icon_2',
                'highlited_icon_3',
            )
            ->orderBy('ordinal', 'ASC')
            ->with(['cover'])
        ;
    }

    public function banner()
    {
        return $this->morphOne($this->getMediaModel(), 'model')->where('collection_name', 'banner');
    }

    public function cover()
    {
        return $this->morphOne($this->getMediaModel(), 'model')->where('collection_name', 'cover');
    }


    // Medya atamaları daha verimli yapıldı
    protected function getCoverUrl(): Attribute
    {
        return new Attribute(
            get: fn() => $this->getMediaUrl('cover', 'websolike.logo')
        );
    }

    protected function getBannerUrl(): Attribute
    {
        return new Attribute(
            get: fn() => $this->getMediaUrl('banner')
        );
    }

    protected function getBoxUrl(): Attribute
    {
        return new Attribute(
            get: fn() => $this->getMediaUrl('box')
        );
    }

    // Ortak medya URL işleme fonksiyonu
    protected function getMediaUrl($collectionName, $default = null)
    {
        $media = $this->getMedia($collectionName)->first();
        return $media ? $media->getUrl() : asset(Config::get($default));
    }

    protected function displayDate(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => Carbon::parse($value)->format('d.m.Y H:i')
        );
    }

    protected function displayDateOriginal(): Attribute
    {
        return Attribute::make(
            get: fn($value) => strtotime($this->getRawOriginal("display_date"))
        );
    }

    protected function fullurl(): Attribute
    {
        $baseUrl = env('APP_DEMO') ? env('DEMO_APP_URL') : config('app.url');
        return Attribute::make(
            // get: fn($value) => $baseUrl . "/" . $this->lang . "/" . ($this->parentPage->url ?? '') . "/" . $this->url
            get: fn($value) => $baseUrl . "/" . $this->lang . "/" . $this->url
        );
    }

    protected function displayOnlyHour(): Attribute
    {
        return Attribute::make(
            get: fn($value) => Carbon::parse($this->getRawOriginal("display_date"))->format('H:i')
        );
    }

    protected function displayOnlyDate(): Attribute
    {
        return Attribute::make(
            get: fn($value) => Carbon::parse($this->getRawOriginal("display_date"))->format('d.m.Y')
        );
    }
}
