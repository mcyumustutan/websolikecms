<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Slider extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'img_url',
        'info',
        'position',
        'is_publish',
        'style',
        'external_link',
        'lang',
    ];

    // Storage::url('public/'.$filename);



    // protected function imgUrl(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn (string $value) => Storage::url('public/sliders/' . $value)
    //     );
    // }
}
