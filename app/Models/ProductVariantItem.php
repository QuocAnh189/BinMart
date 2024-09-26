<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $product_variant_id
 * @property string $name
 * @property float $price
 * @property int $is_default
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read ProductVariant|null $productVariant
 *
 * @method static \Database\Factories\ProductVariantItemFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariantItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariantItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariantItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariantItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariantItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariantItem whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariantItem whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariantItem wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariantItem whereProductVariantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariantItem whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariantItem whereUpdatedAt($value)
 */
class ProductVariantItem extends Model
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

    public function productVariant(): belongsTo
    {
        return $this->belongsTo(ProductVariant::class);
    }
}
