<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $icon
 * @property string $name
 * @property string $url
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Database\Factories\FooterSocialFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|FooterSocial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterSocial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterSocial query()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterSocial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterSocial whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterSocial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterSocial whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterSocial whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterSocial whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterSocial whereUrl($value)
 */
class FooterSocial extends Model
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
