<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $order_id
 * @property string $product_id
 * @property string $vendor_id
 * @property string $product_name
 * @property string $variants
 * @property int|null $variant_total
 * @property string $unit_price
 * @property int $qty
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Order|null $order
 * @property-read Product|null $product
 * @property-read Vendor|null $vendor
 *
 * @method static \Database\Factories\OrderProductFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereProductName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereVariantTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereVariants($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereVendorId($value)
 */
class OrderProduct extends Model
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

    public function vendor(): belongsTo
    {
        return $this->belongsTo(Vendor::class);
    }

    public function product(): belongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function order(): belongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
