<x-layout>
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5 position-relative"
        style="background: url('{{ Vite::asset('resources/img/hero-img/fruits3.jpg') }}') no-repeat center center; 
            background-size: cover; position: relative;">

        <!-- Overlay -->
        <div
            style="position:absolute; top:0; left:0; width:100%; height:100%; 
                background: rgba(0,0,0,0.5); z-index:1;">
        </div>

        <!-- Konten -->
        <div style="position:relative; z-index:2;" class="text-center">
            <h1 class="display-6 fw-bold text-white">Detail Produk</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item fw-bold"><a href="/" class="text-green">Beranda</a></li>
                <li class="breadcrumb-item active text-white">Detail Produk</li>
            </ol>
        </div>
    </div>

    <!-- Single Page Header End -->


    <!-- Single Product Start -->
    <div class="container-fluid py-5 mt-5">
        <div class="container py-5">
            <div class="row g-4 mb-5">
                <div class="col-lg-8 col-xl-9">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="border rounded">
                                <a href="#">
                                    <img src="{{ Vite::asset('resources/img/product_img/' . $product->image) }}"
                                        class="img-fluid rounded w-100 h-100" alt=""
                                        style="max-height: 300px; object-fit: cover;">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="fw-bold mb-3">{{ $product->nama }}</h4>
                            <p class="mb-3">{{ $product->category->nama }}</p>
                            <h5 class="fw-bold mb-3">Rp.{{ $product->harga }}</h5>
                            <div class="d-flex mb-4">
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <livewire:product-detail :product="$product" />

                        </div>
                        <div class="col-lg-12">
                            <nav>
                                <div class="nav nav-tabs mb-3">
                                    <button class="nav-link active border-white border-bottom-0" type="button"
                                        role="tab" id="nav-about-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-about" aria-controls="nav-about"
                                        aria-selected="true">Deskripsi</button>
                                </div>
                            </nav>
                            <div class="tab-content mb-5">
                                <div class="tab-pane active" id="nav-about" role="tabpanel"
                                    aria-labelledby="nav-about-tab">
                                    <p>{{ $product->deskripsi }}</p>
                                    <div class="px-2">
                                        <div class="row g-4">
                                            <div class="col-6">
                                                <div
                                                    class="row bg-light align-items-center text-center justify-content-center py-2">
                                                    <div class="col-6">
                                                        <p class="mb-0">Berat</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="mb-0">{{ $product->productDetail->berat ?? '0' }} kg
                                                        </p>

                                                    </div>
                                                </div>
                                                <div
                                                    class="row text-center align-items-center justify-content-center py-2">
                                                    <div class="col-6">
                                                        <p class="mb-0">Asal Negara</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="mb-0">
                                                            {{ $product->productDetail->asal ?? 'tidak diketahui' }}</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="row bg-light text-center align-items-center justify-content-center py-2">
                                                    <div class="col-6">
                                                        <p class="mb-0">Nutrisi</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="mb-0">{{ $product->productDetail->nutrisi ?? '0' }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="row text-center align-items-center justify-content-center py-2">
                                                    <div class="col-6">
                                                        <p class="mb-0">Sisa Stok</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="mb-0">{{ $product->productDetail->sisastok ?? '0' }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="nav-vision" role="tabpanel">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <h1 class="fw-bold mb-4">Produk Rekomendasi</h1>
            <div class="vesitable">
                <div class="owl-carousel vegetable-carousel justify-content-center">
                    <div class="row g-4 justify-content-center">
                        @foreach ($products as $product)
                            <div class="col-md-3 col-sm-6 col-12">
                                <x-card-product :product="$product" :category="$product->category"></x-card-product>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
