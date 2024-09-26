<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $email
 * @property string $host
 * @property string $username
 * @property string $password
 * @property string $port
 * @property string $encryption
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Database\Factories\EmailConfigurationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|EmailConfiguration newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailConfiguration newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailConfiguration query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailConfiguration whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailConfiguration whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailConfiguration whereEncryption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailConfiguration whereHost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailConfiguration whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailConfiguration wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailConfiguration wherePort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailConfiguration whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailConfiguration whereUsername($value)
 */
class EmailConfiguration extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'email',
        'host',
        'username',
        'password',
        'port',
        'encryption',
    ];

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
