<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property int $status
 * @property int $mode
 * @property string $country_name
 * @property string $currency_name
 * @property float $currency_rate
 * @property string $client_id
 * @property string $secret_key
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Database\Factories\PaypalSettingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PaypalSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaypalSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaypalSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaypalSetting whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaypalSetting whereCountryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaypalSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaypalSetting whereCurrencyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaypalSetting whereCurrencyRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaypalSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaypalSetting whereMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaypalSetting whereSecretKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaypalSetting whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaypalSetting whereUpdatedAt($value)
 */
class PaypalSetting extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'status',
        'mode',
        'country_name',
        'currency_name',
        'currency_rate',
        'client_id',
        'secret_key',
    ];

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
