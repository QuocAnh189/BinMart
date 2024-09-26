<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $key
 * @property string $value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Database\Factories\AdvertisementFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Advertisement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Advertisement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Advertisement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Advertisement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advertisement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advertisement whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advertisement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advertisement whereValue($value)
 */
class Advertisement extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = ['key', 'value'];

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
