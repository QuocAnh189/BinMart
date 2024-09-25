<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class BlogComment extends Model
{
    use HasFactory;
    public $incrementing = false;

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function blog(): belongsTo
    {
        return $this->belongsTo(Blog::class);
    }

    protected $keyType = 'string';


    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
