<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogComment extends Model
{
    use HasFactory;

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function blog(): belongsTo
    {
        return $this->belongsTo(Blog::class);
    }
}
