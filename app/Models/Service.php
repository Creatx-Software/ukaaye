<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'description', 'image_path',
        'meta_title', 'meta_description', 'meta_keyword', 'is_public',
    ];

    protected $casts = [
        'is_public' => 'boolean',
    ];

    public function getImageUrlAttribute(): string
    {
        if (!$this->image_path) {
            return asset('assets/img/services/pexels-tima-miroshnichenko-6755135.jpg');
        }

        if (str_starts_with($this->image_path, 'assets/')) {
            return asset($this->image_path);
        }

        return Storage::url($this->image_path);
    }

    protected static function booted(): void
    {
        static::creating(function ($service) {
            if (empty($service->slug)) {
                $service->slug = Str::slug($service->title);
            }
        });

        static::updating(function ($service) {
            if ($service->isDirty('title') && empty($service->slug)) {
                $service->slug = Str::slug($service->title);
            }
        });
    }
}
