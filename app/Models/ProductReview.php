<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $product_id
 * @property string $user_id
 * @property string $vendor_id
 * @property string $review
 * @property string $rating
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Product|null $product
 * @property-read Collection<int, ProductReviewGallery> $productReviewGalleries
 * @property-read int|null $product_review_galleries_count
 * @property-read User|null $user
 *
 * @method static \Database\Factories\ProductReviewFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereReview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereVendorId($value)
 */
class ProductReview extends Model
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

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function productReviewGalleries(): hasMany
    {
        return $this->hasMany(ProductReviewGallery::class);
    }

    public function product(): belongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
