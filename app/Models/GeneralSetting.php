<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $site_name
 * @property string $layout
 * @property string $contact_email
 * @property string|null $contact_phone
 * @property string|null $contact_address
 * @property string|null $map
 * @property string $currency_name
 * @property string $currency_icon
 * @property string $time_zone
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Database\Factories\GeneralSettingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereContactAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereContactEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereContactPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereCurrencyIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereCurrencyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereLayout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereMap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereSiteName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereTimeZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralSetting whereUpdatedAt($value)
 */
class GeneralSetting extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'site_name',
        'layout',
        'contact_email',
        'contact_phone',
        'contact_address',
        'map',
        'currency_name',
        'time_zone',
        'currency_icon',
    ];

    protected $keyType = 'string';

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
