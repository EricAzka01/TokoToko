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
    ];
}
