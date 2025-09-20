<?php
//jelasin
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'price_snapshot'
    ];

    protected $with = ['user', 'product'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function product_id(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    #[Scope]
    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when(
            $filters['keyword'] ?? false,

            function ($query, $keyword) {
                $query->whereHas('user', function ($query) use ($keyword) {
                    $query->where('username', 'like', '%' . $keyword . '%');
                })->orWhereHas('product', function ($query) use ($keyword) {
                    $query->where('nama', 'like', '%' . $keyword . '%' );
                });
            }
        );
    }
}
