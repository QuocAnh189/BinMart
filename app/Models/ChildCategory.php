<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChildCategory extends Model
{
    use HasFactory;

    public function category(): belongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory(): belongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }
}
