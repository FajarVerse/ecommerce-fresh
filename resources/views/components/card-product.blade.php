@props(['product'])


<div class="card">
    <img src="{{ Vite::asset('resources/img/product_img/apel.jpg') }}"  style="width: 266px; height: 200px; object-fit: cover; border-radius: 12px;" class="rounded">
    <div class="card_content">
        <div class="card_body">
            <div class="card_tag">
                <a href="" class="card_category"style="display:inline-block; margin-bottom:10px;">Category</a>
                <button class="card_like">❤️</button>
            </div>
            <h4 class="card_tittle">{{ $product->nama }}</h4>
        </div>
        <div class="card_footer">
            <p class="card_price">Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
            <a href="/shop_detail/{{ $product->id }}">
                <button class="card_btn"> More</button>
            </a>
        </div>
    </div>
</div>
