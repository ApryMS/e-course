<?php

namespace App\Models;

use App\Models\User\Siswa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaymentConfirmation extends Model
{
    use HasFactory;
    protected $fillable = [
        'siswa_id',
        'product_id',
        'name_of_no_rek',
        'price',
        'note',
        'photo_payment',
        'status_payment',
    ];

    public function Siswa(): BelongsTo {
        return $this->belongsTo(Siswa::class);
    }
    public function Product(): BelongsTo {
        return $this->belongsTo(Product::class);
    }
}
