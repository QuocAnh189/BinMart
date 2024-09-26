<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string|null $logo
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $address
 * @property string|null $copyright
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Database\Factories\FooterInfoFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo whereCopyright($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo whereUpdatedAt($value)
 */
class FooterInfo extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'logo',
        'phone',
        'email',
        'address',
        'copyright',
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
