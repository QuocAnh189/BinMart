<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $email
 * @property string $verified_token
 * @property string $is_verified
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Database\Factories\NewsletterSubscriberFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|NewsletterSubscriber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsletterSubscriber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsletterSubscriber query()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsletterSubscriber whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsletterSubscriber whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsletterSubscriber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsletterSubscriber whereIsVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsletterSubscriber whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsletterSubscriber whereVerifiedToken($value)
 */
class NewsletterSubscriber extends Model
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
