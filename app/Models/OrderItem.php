<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'price',
        'quantity',
    ];

    protected $with = ['order', 'productId.product'];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function productId(): BelongsTo{
        return $this->belongsTo(Product::class);
    }

    #[Scope]
    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when(
            $filters['keyword'] ?? false,
            function ($query, $keyword) {
                $query->whereHas('order', function ($query) use ($keyword) {
                    $query->where('order_code', 'like', '%', $keyword . '%');
            })->orWhereHas('producId.product', function ($query) use ($keyword) {
                $query->where('name', 'like', '%' . $keyword . '%');
            });
    }
);
}
}
