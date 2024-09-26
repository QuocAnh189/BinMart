<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property int $status
 * @property string $country_name
 * @property string $currency_name
 * @property float $currency_rate
 * @property string $razorpay_key
 * @property string $razorpay_secret_key
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Database\Factories\RazorpaySettingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpaySetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpaySetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpaySetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpaySetting whereCountryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpaySetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpaySetting whereCurrencyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpaySetting whereCurrencyRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpaySetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpaySetting whereRazorpayKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpaySetting whereRazorpaySecretKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpaySetting whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpaySetting whereUpdatedAt($value)
 */
class RazorpaySetting extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'status',
        'country_name',
        'currency_name',
        'currency_rate',
        'razorpay_key',
        'razorpay_secret_key',
    ];

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
