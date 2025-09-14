@props(['product'])


<div class="col-md-6 col-lg-6 col-xl-4 d-flex">
    <div class="rounded position-relative fruite-item h-70 w-100">
        <div class="fruite-img">
            <img src="{{ Vite::asset('resources/img/product_img/apel.jpg') }}" class="img-fluid w-100 h-20 rounded-top" alt="">
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">
            Fruits
        </div>
        <div class="p-4 border  border-top-0 rounded-bottom d-flex flex-column justify-content-between h-100">
            <div>
                <a href="/shop_detail/{{ $product->id }}">
                    <h4>{{ $product->nama }}</h4>
                </a>
                {{-- <p>{{ $product->deskripsi }}</p> --}}
            </div>
            <div class="d-flex justify-content-between flex-lg-wrap mt-auto">
                <p class="text-dark fs-5 fw-bold mb-0">{{ $product->harga }} / kg</p>
                <a href="/cart" class="btn border border-secondary rounded-pill px-3 text-primary">
                    <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                </a>
            </div>
        </div>
    </div>
</div>

