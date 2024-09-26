<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $end_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Database\Factories\FlashSaleFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|FlashSale newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlashSale newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlashSale query()
 * @method static \Illuminate\Database\Eloquent\Builder|FlashSale whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlashSale whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlashSale whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlashSale whereUpdatedAt($value)
 */
class FlashSale extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = ['end_date', 'id'];

    protected $keyType = 'string';

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
