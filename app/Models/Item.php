<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Seller;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'i_name',
        'i_price',
        'i_description',
        'i_stock',
        'i_image',
        'i_slug',
        'seller_id',
    ];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class, 'item_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'item_id');
    }
}
