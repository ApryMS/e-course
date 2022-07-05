<?php

namespace App\Models\User;

use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'product_id', 
        'payment_method_id',
        'name',
        'email',
        'username',
        'password',
        'wa_number',
        'no_ortu',
        'from_school',
        'province',
        'regency',
        'payment_status',
        'siswa_status',
    ];

    public function Mentor(): BelongsTo {
        return $this->belongsTo(Mentor::class);
    }
    public function User(): BelongsTo {
        return $this->belongsTo(User::class);
    }
    public function Pejuang(): BelongsTo {
        return $this->belongsTo(Pejuang::class);
    }
    public function Product(): BelongsTo {
        return $this->belongsTo(Product::class);
    }
    public function PaymentMethod(): BelongsTo {
        return $this->belongsTo(PaymentMethod::class);
    }
}
