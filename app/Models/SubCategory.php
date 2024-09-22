<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubCategory extends Model
{
    use HasFactory;

    public function category(): belongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function childCategories(): hasMany
    {
        return $this->hasMany(ChildCategory::class);
    }
}
