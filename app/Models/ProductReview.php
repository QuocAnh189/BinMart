<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductReview extends Model
{
    use HasFactory;

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function productReviewGalleries(): hasMany
    {
        return $this->hasMany(ProductReviewGallery::class);
    }

    public function product(): belongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
