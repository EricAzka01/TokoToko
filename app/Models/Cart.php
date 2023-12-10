<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_id',
        'item_id',
    ];

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
