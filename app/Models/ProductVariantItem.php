<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductVariantItem extends Model
{
    use HasFactory;

    public function productVariant(): belongsTo
    {
        return $this->belongsTo(ProductVariant::class);
    }
}
