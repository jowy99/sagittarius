<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class devs extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    protected $guarded = ['id'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('gallery')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/webp'])
            ->registerMediaConversions(function () {
                $this->addMediaConversion('thumb')
                    // ->format(Manipulations::FORMAT_WEBP)
                    ->nonOptimized()
                    ->sharpen(10)
                    ->width(300);
                $this->addMediaConversion('web')
                    ->withResponsiveImages()
                    // ->format(Manipulations::FORMAT_WEBP)
                    ->optimize()
                    ->quality(75);
            });
    }

}
