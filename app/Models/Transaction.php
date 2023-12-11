<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [

        'buyer_id',
        'item_id',
        'seller_id',
        't_time',
        't_status',

    ];
}
