<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HistoryTransaksiFee extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'total_transfer', 'total_siswa', 'photo_transfer_fee'
    ];

    public function User() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
