<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderProduct extends Model
{
    use HasFactory;

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
}
