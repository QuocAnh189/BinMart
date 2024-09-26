<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $pusher_app_id
 * @property string $pusher_key
 * @property string $pusher_secret
 * @property string $pusher_cluster
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Database\Factories\PusherSettingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PusherSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PusherSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PusherSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|PusherSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PusherSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PusherSetting wherePusherAppId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PusherSetting wherePusherCluster($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PusherSetting wherePusherKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PusherSetting wherePusherSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PusherSetting whereUpdatedAt($value)
 */
class PusherSetting extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'pusher_app_id',
        'pusher_key',
        'pusher_secret',
        'pusher_cluster',
    ];

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
