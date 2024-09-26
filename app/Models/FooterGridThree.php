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
 * @method static \Database\Factories\FooterGridThreeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridThree newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridThree newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridThree query()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridThree whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridThree whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridThree whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridThree whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridThree whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridThree whereUrl($value)
 */
class FooterGridThree extends Model
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
