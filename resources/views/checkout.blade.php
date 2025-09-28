<x-layout>
    <div class="container-fluid page-header py-5 position-relative"
        style="background: url('{{ Vite::asset('resources/img/hero-img/fruits2.jpg') }}') no-repeat center center; 
            background-size: cover; position: relative;">

        <!-- Overlay -->
        <div
            style="position:absolute; top:0; left:0; width:100%; height:100%; 
                background: rgba(0,0,0,0.5); z-index:1;">
        </div>

        <!-- Konten -->
        <div style="position:relative; z-index:2;" class="text-center">
            <h1 class="display-6 fw-bold text-white">Checkout</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item fw-bold"><a href="/" class="text-green">Beranda</a></li>
                <li class="breadcrumb-item active text-white">Checkout</li>
            </ol>
        </div>
    </div>


    <!-- Checkout Page Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="mb-4">Detail Pembayaran</h1>
            <form action="{{ route('checkout.checkout') }}" method="POST">
                @csrf
                <div class="row g-5">
                    <div class="col-md-12 col-lg-6 col-xl-7">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Produk</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carts as $cart)
                                        <tr>
                                            <th scope="row">
                                                <div class="d-flex align-items-center mt-2">
                                                    <img src="{{ Vite::asset('resources/img/product_img/' . $cart->product->image) }}"
                                                        alt="" class="img-fluid rounded-circle"
                                                        style="width: 90px; height: 90px;" alt="">
                                                </div>
                                            </th>
                                            <td class="py-5">{{ $cart->product->nama }}</td>
                                            <td class="py-5">{{ $cart->product->harga }}</td>
                                            <td class="py-5">{{ $cart->quantity }}</td>
                                            <td class="py-5">{{ $cart->product->harga * $cart->quantity }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-5">
                        <div class="row g-4 border-bottom py-3">
                            <div class="col-12">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0 text-dark fs-10">Total</p>
                                    <p class="mb-0 text-dark fs-10">
                                        {{ $carts->sum(fn($cart) => $cart->product->harga * $cart->quantity) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4 border-bottom py-3">
                            @php
                                $ongkir = 0;
                            @endphp
                            <div class="col-12">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0 text-dark fs-10">Ongkos Kirim</p>
                                    <p class="mb-0 text-dark fs-10">{{ $ongkir }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4 border-bottom py-3">
                            <div class="col-12">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0 text-dark fs-5 fw-bold">Subtotal</p>
                                    <p class="mb-0 text-dark fs-5 fw-bold">
                                        {{ $carts->sum(fn($cart) => $cart->product->harga * $cart->quantity) + $ongkir }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4 text-center align-items-center justify-content-center border-bottom py-3">
                            <div class="col-12">
                                <div class="form-check text-start my-3">
                                    <input type="radio" class="form-check-input bg-primary border-0" id="Payments-1"
                                        name="payment_method" value="digital">
                                    <label class="form-check-label fw-bold text-dark" for="Payments-1">Bayar
                                        langsung</label>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4 text-center align-items-center justify-content-center border-bottom py-3">
                            <div class="col-12">
                                <div class="form-check text-start my-3">
                                    <input type="radio" class="form-check-input bg-primary border-0" id="Delivery-1"
                                        name="payment_method" value="cod">
                                    <label class="form-check-label fw-bold text-dark" for="Delivery-1">Bayar ditempat
                                        (COD)</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4 text-center align-items-center justify-content-center border-bottom py-3">
                            <div class="row g-4 text-center align-items-center justify-content-center pt-4">
                                <button type="submit"
                                    class="btn border-secondary py-3 px-4 text-uppercase w-100 text-primary">Order</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</x-layout>
