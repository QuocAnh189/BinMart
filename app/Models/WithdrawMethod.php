<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $name
 * @property float $minimum_amount
 * @property float $maximum_amount
 * @property float $withdraw_charge
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Database\Factories\WithdrawMethodFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawMethod whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawMethod whereMaximumAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawMethod whereMinimumAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawMethod whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawMethod whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawMethod whereWithdrawCharge($value)
 */
class WithdrawMethod extends Model
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
