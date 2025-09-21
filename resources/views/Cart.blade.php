<x-layout>
    <!-- Single Page Header start -->
    {{-- <div class="container-fluid page-header py-5" 
     style="background: url('{{ Vite::asset('resources/img/hero-img/fruits4.jpg') }}') no-repeat center center; 
            background-size: cover;"> --}}

    <div class="container-fluid page-header py-5 position-relative"
        style="background: url('{{ Vite::asset('resources/img/hero-img/fruits4.jpg') }}') no-repeat center center; 
            background-size: cover; position: relative;">

        <!-- Overlay -->
        <div
            style="position:absolute; top:0; left:0; width:100%; height:100%; 
                background: rgba(0,0,0,0.5); z-index:1;">
        </div>

        <!-- Konten -->
        <div style="position:relative; z-index:2;" class="text-center">
            <h1 class="display-6 fw-bold text-white">Cart</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item fw-bold"><a href="/" class="text-green">Beranda</a></li>
                <li class="breadcrumb-item active text-white">Profil</li>
            </ol>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-start">

                <!-- Kolom Daftar Produk -->
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="table-responsive bg-white rounded p-3 shadow-sm">
                        <table class="table align-middle">
                            <thead class="bg-green bg-opacity-25">
                                <tr>
                                    <th scope="col" class="fw-bold">Produk</th>
                                    <th scope="col" class="fw-bold">Nama</th>
                                    <th scope="col" class="fw-bold">Harga</th>
                                    <th scope="col" class="fw-bold">Jumlah</th>
                                    <th scope="col" class="fw-bold">Total</th>
                                    <th scope="col" class="fw-bold"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Contoh produk -->
                                <tr>
                                    <td>
                                        <img src="{{ Vite::asset('resources/img/product_img/apel.jpg') }}"
                                            style="width: 80px; height: 80px; object-fit: cover; border-radius: 12px;"
                                            class="rounded">
                                    </td>
                                    <td>Fresh Apple</td>
                                    <td class="price" data-price="3.00">$3.00</td>
                                    <td>
                                        <input type="number" value="2" min="1"
                                            class="form-control form-control-sm text-center quantity"
                                            style="width: 70px;">
                                    </td>
                                    <td class="total">$6.00</td>
                                    <td>
                                        <button class="btn btn-sm btn-danger rounded-pill px-3 remove">Remove</button>
                                    </td>
                                </tr>
                                <!-- Tambahkan produk lain -->
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="bg-light rounded p-4 shadow-sm" style="min-height: 100%;">
                        <h2 class="display-6 mb-4">Keranjang<span class="fw-normal">Total</span></h2>

                        <div class="d-flex justify-content-between mb-3">
                            <span class="fw-bold">Subtotal:</span>
                            <span>$96.00</span>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <span class="fw-bold">Ongkos Kirim:</span>
                            <span>$3.00</span>
                        </div>

                        <div class="border-top border-bottom py-3 mb-3 d-flex justify-content-between">
                            <span class="fw-bold">Total:</span>
                            <span>$99.00</span>
                        </div>

                        <a href="/checkout" class="btn btn-primary rounded-pill w-100 py-3 fw-bold">
                            Proses Checkout
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        // Update total saat quantity berubah
        document.querySelectorAll(".quantity").forEach(input => {
            input.addEventListener("input", function() {
                let row = this.closest("tr");
                let price = parseFloat(row.querySelector(".price").dataset.price);
                let qty = parseInt(this.value);
                let total = (price * qty).toFixed(2);
                row.querySelector(".total").textContent = `$${total}`;
            });
        });

        // Remove row
        document.querySelectorAll(".remove").forEach(btn => {
            btn.addEventListener("click", function() {
                this.closest("tr").remove();
            });
        });
    </script>


</x-layout>
