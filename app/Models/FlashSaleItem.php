<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $product_id
 * @property string $flash_sale_id
 * @property int $show_at_home
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Product|null $product
 *
 * @method static \Database\Factories\FlashSaleItemFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|FlashSaleItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlashSaleItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlashSaleItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|FlashSaleItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlashSaleItem whereFlashSaleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlashSaleItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlashSaleItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlashSaleItem whereShowAtHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlashSaleItem whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlashSaleItem whereUpdatedAt($value)
 */
class FlashSaleItem extends Model
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
