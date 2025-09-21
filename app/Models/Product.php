<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
        protected $fillable = ['nama','harga','stok', 'deskripsi', 'image', 'category_id'];

        protected $with = ['category'];

    public function category():BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function order():HasMany{
        return $this->hasMany(Order::class, 'product_id');
    }

    public function wishlists()
    {
    return $this->hasMany(Wishlist::class);
    }


}
