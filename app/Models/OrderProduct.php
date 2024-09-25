<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class OrderProduct extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;

    public function vendor(): belongsTo
    {
        return $this->belongsTo(Vendor::class);
    }

    public function product(): belongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function order(): belongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
