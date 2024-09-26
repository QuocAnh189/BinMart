<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $logo
 * @property string $favicon
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Database\Factories\LogoSettingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|LogoSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LogoSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LogoSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|LogoSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogoSetting whereFavicon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogoSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogoSetting whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogoSetting whereUpdatedAt($value)
 */
class LogoSetting extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = ['logo', 'favicon'];

    protected $keyType = 'string';

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
