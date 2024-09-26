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
 * @method static \Database\Factories\StripeSettingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|StripeSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StripeSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StripeSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|StripeSetting whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StripeSetting whereCountryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StripeSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StripeSetting whereCurrencyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StripeSetting whereCurrencyRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StripeSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StripeSetting whereMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StripeSetting whereSecretKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StripeSetting whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StripeSetting whereUpdatedAt($value)
 */
class StripeSetting extends Model
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
