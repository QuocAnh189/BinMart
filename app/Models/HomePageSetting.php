<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string|null $key
 * @property string|null $value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Database\Factories\HomePageSettingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|HomePageSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomePageSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomePageSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|HomePageSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomePageSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomePageSetting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomePageSetting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomePageSetting whereValue($value)
 */
class HomePageSetting extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'key',
        'value',
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
