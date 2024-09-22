<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    use HasFactory;

    public function category(): belongsTo
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments(): hasMany
    {
        return $this->hasMany(BlogComment::class);
    }
}
