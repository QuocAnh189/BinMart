<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function transaction(): hasOne
    {
        return $this->hasOne(Transaction::class);
    }

    public function orderProducts(): hasMany
    {
        return $this->hasMany(OrderProduct::class);
    }
}
