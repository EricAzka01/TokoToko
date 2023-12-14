<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        't_quantity',
        't_totalprice',
        't_status',
        't_paymentmethod',
        't_paymentproof',
        't_trackingcode',
        'buyer_id',
        'item_id',
        'seller_id',
    ];

    public function buyer()
    {
        return $this->belongsTo(Buyer::class, 'buyer_id');
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class, 'seller_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
