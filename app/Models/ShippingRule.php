<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $name
 * @property string $type
 * @property float|null $min_cost
 * @property float $cost
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Database\Factories\ShippingRuleFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingRule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingRule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingRule query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingRule whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingRule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingRule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingRule whereMinCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingRule whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingRule whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingRule whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingRule whereUpdatedAt($value)
 */
class ShippingRule extends Model
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
