<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BabVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', 'title',
    ];

    public function Product() : BelongsTo {
        return $this->belongsTo(Product::class);
    }
}
