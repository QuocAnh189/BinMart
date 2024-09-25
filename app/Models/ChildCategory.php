<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class ChildCategory extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;

    public function category(): belongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory(): belongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
