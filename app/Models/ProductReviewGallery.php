<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $product_review_id
 * @property string $image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Database\Factories\ProductReviewGalleryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReviewGallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReviewGallery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReviewGallery query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReviewGallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReviewGallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReviewGallery whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReviewGallery whereProductReviewId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReviewGallery whereUpdatedAt($value)
 */
class ProductReviewGallery extends Model
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
}
