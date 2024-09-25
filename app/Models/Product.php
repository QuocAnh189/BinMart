<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;

    public function vendor(): belongsTo
    {
        return $this->belongsTo(Vendor::class);
    }

    public function category(): belongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function productImageGalleries(): hasMany
    {
        return $this->hasMany(ProductImageGallery::class);
    }

    public function variants(): hasMany
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function brand(): belongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function reviews(): hasMany
    {
        return $this->hasMany(ProductReview::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
