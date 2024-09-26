<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $name
 * @property string $url
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Database\Factories\FooterGridTwoFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridTwo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridTwo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridTwo query()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridTwo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridTwo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridTwo whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridTwo whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridTwo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridTwo whereUrl($value)
 */
class FooterGridTwo extends Model
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
