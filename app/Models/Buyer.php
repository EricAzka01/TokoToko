<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Buyer extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'b_name',
        'b_email',
        'b_phoneno',
        'b_address',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class, 'buyer_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'buyer_id');
    }
}
