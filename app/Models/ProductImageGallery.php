<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $image
 * @property string $product_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Product|null $product
 *
 * @method static \Database\Factories\ProductImageGalleryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImageGallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImageGallery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImageGallery query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImageGallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImageGallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImageGallery whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImageGallery whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImageGallery whereUpdatedAt($value)
 */
class ProductImageGallery extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    public function product(): belongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
