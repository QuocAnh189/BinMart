<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $category_id
 * @property string $sub_category_id
 * @property string $name
 * @property string $slug
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Category|null $category
 * @property-read SubCategory|null $subCategory
 *
 * @method static \Database\Factories\ChildCategoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ChildCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChildCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChildCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChildCategory whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChildCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChildCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChildCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChildCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChildCategory whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChildCategory whereSubCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChildCategory whereUpdatedAt($value)
 */
class ChildCategory extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    public function category(): belongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory(): belongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }
}
