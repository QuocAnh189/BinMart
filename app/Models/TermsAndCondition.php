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
 * @method static \Database\Factories\TermsAndConditionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TermsAndCondition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TermsAndCondition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TermsAndCondition query()
 * @method static \Illuminate\Database\Eloquent\Builder|TermsAndCondition whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TermsAndCondition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TermsAndCondition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TermsAndCondition whereUpdatedAt($value)
 */
class TermsAndCondition extends Model
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
