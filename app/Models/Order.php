<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'status',
        'total',
        'user_id',
        'payment_method',
        'product_id',
        'jumlah'
    ];

    protected $with = ['user', 'product'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function orderItem(): HasMany
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }
}


// public function product():BelongsTo{
    //     return $this->belongsTo(Product::class);
    // }