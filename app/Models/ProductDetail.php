<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductDetail extends Model
{
    use HasFactory;

    protected $fiilabe = [
        'berat',
        'asal',
        'nutrisi',
        'sisastok',
        'product_id'
    ];
    
    public function product():BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
