<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product;
    public $quantities = [];

    public function mount()
    {
        $products = Product::all();
        foreach ($products as $product) {
            $this->quantities[$product->id] = 1; // default qty
        }

        // $this->cartItems = Chart::where('user_id', Auth::id())->get();
    }

    public function increment($productid)
    {
        $this->quantities[$productid]++;
    }

    public function decrement($productid)
    {
        if ($this->quantities[$productid] > 1) {
            $this->quantities[$productid]--;
        }
    }

    public function addToCart()
    {
        Http::post(route('cart.store', [
            'product_id' => $this->product->id,
            'qty' => $this->quantities
        ]));

        return redirect()->route('cart');
    }

    public function render()
    {
        return view('livewire.product-detail');
    }
}
