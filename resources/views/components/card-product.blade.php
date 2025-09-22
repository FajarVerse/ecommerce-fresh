{{-- @props(['product','category'])


<div class="card">
    <img src="{{ Vite::asset('resources/img/product_img/apel.jpg') }}"
     style="width: 100%; height: 200px; object-fit: cover; border-radius: 12px;"
     class="rounded"><div class="card_content">
        <div class="card_body">
            <div class="card_tag">
                <a href="" class="card_category"style="display:inline-block; margin-bottom:10px;">{{ $category->nama }}</a>
                <button class="card_like">❤️</button>
            </div>
            <h4 class="card_tittle">{{ $product->nama }}</h4>
        </div>
        <div class="card_footer">
            <p class="card_price">Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
            <a href="/shop_detail/{{ $product->id }}">
                <button class="card_btn">Lihat Detail</button>
            </a>
        </div>
    </div>
</div> --}}

@props(['product', 'category'])

<div class="card">
    {{-- <img src="{{ Vite::asset('resources/img/product_img/apel.jpg') }}"
        style="width: 100%; height: 200px; object-fit: cover; border-radius: 12px;" class="rounded"> --}}
    <img src="{{ Vite::asset('resources/img/product_img/' . $product->image) }}"
     style="width: 100%; height: 200px; object-fit: cover; border-radius: 12px;"
     class="rounded">

        <div class="card_content">
        <div class="card_body">
            <div class="card_tag">
                <a href="" class="card_category"
                    style="display:inline-block; margin-bottom:10px;">{{ $category->nama ?? '   ' }}</a>
                @auth
                    <form
                        action="{{ route($product->wishlists()->where('user_id', auth()->id())->exists()? 'wishlist.remove': 'wishlist.add',$product->id) }}"
                        method="{{ $product->wishlists()->where('user_id', auth()->id())->exists()? 'DELETE': 'POST' }}"
                        style="display:inline;">
                        @csrf
                        @if ($product->wishlists()->where('user_id', auth()->id())->exists())
                            @method('DELETE')
                        @endif
                        <button type="submit" class="card_like"
                            style="color: {{ $product->wishlists()->where('user_id', auth()->id())->exists()? 'red': 'grey' }};">
                            <i class="fas fa-heart"></i>
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="card_like" style="color: grey;">
                        <i class="fas fa-heart"></i>
                    </a>
                @endauth
            </div>
            <h4 class="card_tittle">{{ $product->nama }}</h4>
        </div>
        <div class="card_footer">
            <p class="card_price">Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
            <a href="/shop_detail/{{ $product->id }}">
                <button class="card_btn">Lihat Detail</button>
            </a>
        </div>
    </div>
</div>
