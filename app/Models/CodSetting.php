<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Database\Factories\CodSettingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CodSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CodSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CodSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|CodSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CodSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CodSetting whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CodSetting whereUpdatedAt($value)
 */
class CodSetting extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'status',
    ];

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
