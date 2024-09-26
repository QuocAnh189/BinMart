<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string|null $footer_grid_two_title
 * @property string|null $footer_grid_three_title
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Database\Factories\FooterTitleFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|FooterTitle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterTitle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterTitle query()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterTitle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterTitle whereFooterGridThreeTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterTitle whereFooterGridTwoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterTitle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterTitle whereUpdatedAt($value)
 */
class FooterTitle extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'footer_grid_two_title',
        'footer_grid_three_title',
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
