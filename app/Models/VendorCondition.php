<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $content
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Database\Factories\VendorConditionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|VendorCondition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VendorCondition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VendorCondition query()
 * @method static \Illuminate\Database\Eloquent\Builder|VendorCondition whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VendorCondition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VendorCondition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VendorCondition whereUpdatedAt($value)
 */
class VendorCondition extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = ['content'];

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
