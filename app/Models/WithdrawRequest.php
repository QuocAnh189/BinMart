<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WithdrawRequest extends Model
{
    use HasFactory;

    public function vendor(): belongsTo
    {
        return $this->belongsTo(Vendor::class);
    }
}
