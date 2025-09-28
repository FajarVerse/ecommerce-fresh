<x-layout>
    @section('styles')
        <style>
            .success-circle {
                width: 80px;
                height: 80px;
                background: #d1e7dd;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 20px;
            }

            .success-check {
                color: #198754;
                font-size: 2rem;
            }

            .order-card {
                background: #ffffff;
                border: 1px solid #e9ecef;
                border-radius: 8px;
                padding: 15px;
                margin-bottom: 15px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .custom-green {
                background-color: #198754;
                color: white;
            }

            .custom-green:hover {
                background-color: #146c43;
            }

            .status-pending {
                background-color: #fff3cd;
                color: #856404;
            }

            .status-processed {
                background-color: #d1e7dd;
                color: #0f5132;
            }

            .status-delivered {
                background-color: #d4edda;
                color: #155724;
            }
        </style>
    @endsection

    <body class="min-h-screen bg-gray-100 flex flex-col">
        <div class="h-10 bg-gray-100"></div>

        <div class="container mx-auto p-6 pt-10 flex-grow">
            <div class="text-center mb-8">
                <div class="success-circle">
                    <span class="success-check">✔</span>
                </div>
                <h1 class="text-2xl font-bold text-gray-800">Yeayy! Cek Riwayat Pesananmu!</h1>
                <p class="text-gray-600">Lihat semua pesanan seru yang udah kamu buat, yuk!</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @forelse ($orders as $order)
                    <div class="order-card">
                        <h3 class="text-lg font-semibold text-gray-800">Pesanan #</h3>
                        <p class="text-gray-600">Nama: #</p>
                        <p class="text-gray-600">Tanggal: </p>
                        <p class="text-gray-600">Total: Rp </p>
                        <span class="inline-block px-2 py-1 rounded-full text-sm font-medium"></span>
                    </div>
                @empty
                    <p class="text-center text-gray-500">Belum ada riwayat pesanan. Ayo belanja sekarang!</p>
                @endforelse
            </div>

            <div class="mt-8 text-center">
                <a href="/"
                    class="custom-green font-bold px-6 py-3 rounded-lg text-center hover:bg-green-700 transition-colors">
                    Kembali ke Beranda yang Penuh Kejutan!
                </a>
            </div>
        </div>
    </body>
</x-layout>
