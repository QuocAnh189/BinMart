<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $vendor_id
 * @property string $method
 * @property float $total_amount
 * @property float $withdraw_amount
 * @property float $withdraw_charge
 * @property string $account_info
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Vendor $vendor
 *
 * @method static \Database\Factories\WithdrawRequestFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawRequest whereAccountInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawRequest whereMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawRequest whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawRequest whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawRequest whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawRequest whereVendorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawRequest whereWithdrawAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WithdrawRequest whereWithdrawCharge($value)
 */
class WithdrawRequest extends Model
{
    use HasFactory;

    public static array $status = ['pending', 'paid', 'decline'];

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
}
