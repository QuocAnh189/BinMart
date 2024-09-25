<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = ['seen'];

    protected $keyType = 'string';
    public $incrementing = false;

    public function receiverProfile(): belongsTo
    {
        return $this->belongsTo(User::class, 'receiver_id', 'id')->select(['id', 'image', 'name']);
    }

    public function senderProfile(): belongsTo
    {
        return $this->belongsTo(User::class, 'sender_id', 'id')->select(['id', 'image', 'name']);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
