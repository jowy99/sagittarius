<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class devs extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    protected $guarded = ['id'];

    public function count(): int
    {
        return self::query()->count();
    }

    public array $translatable = [
        'title',
        'description',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('devProjects')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/webp'])
            ->singleFile()
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
