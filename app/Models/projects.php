<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class projects extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    protected $guarded = ['id'];
    protected $casts = [
        'download' => 'boolean',
    ];

    public function count(): int
    {
        return self::query()->count();
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('Projects')
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
