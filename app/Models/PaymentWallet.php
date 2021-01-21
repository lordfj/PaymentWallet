<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentWallet extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function User()
    {
        return $this->belongTo(User::class);
    }
}
