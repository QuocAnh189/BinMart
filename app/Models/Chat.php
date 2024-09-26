<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $sender_id
 * @property string $receiver_id
 * @property string $message
 * @property int $seen
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User|null $receiverProfile
 * @property-read User|null $senderProfile
 *
 * @method static \Database\Factories\ChatFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Chat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat query()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereReceiverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereSeen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereSenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereUpdatedAt($value)
 */
class Chat extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = ['seen'];

    protected $keyType = 'string';

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    public function receiverProfile(): belongsTo
    {
        return $this->belongsTo(User::class, 'receiver_id', 'id')->select(['id', 'image', 'name']);
    }

    public function senderProfile(): belongsTo
    {
        return $this->belongsTo(User::class, 'sender_id', 'id')->select(['id', 'image', 'name']);
    }
}
