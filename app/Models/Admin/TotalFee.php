<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TotalFee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'total_siswa_confirm', 'total_fee'
    ];


    public function User(): HasOne {
        return $this->hasOne(User::class);
    }

}
