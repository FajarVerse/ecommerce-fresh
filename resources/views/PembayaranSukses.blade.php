<x-layout>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Sukses Pesanan - Fresh Nih!</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="min-h-screen bg-gray-100 flex flex-col">
        <!-- Ruang kosong di atas sebagai placeholder -->
        <div class="h-10 bg-gray-100"></div>
        <div class="h-10 bg-gray-100"></div>

        <div class="container mx-auto p-6 pt-10 flex-grow">
            <div class="payment-card">
                <div class="text-center py-10">
                    <div class="success-circle mb-4">
                        <span class="success-check">✔</span>
                    </div>
                    <h1 class="text-2xl font-bold text-gray-800 mb-2">Pembayaran Sukses Pesanan</h1>
                    <p class="text-gray-600 mb-8">
                        Transaksi sukses! 🎉 Pesanan sayur dan buah segar kamu sedang diproses dan segera meluncur ke rumahmu.</p>
                    <div class="mt-8 flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="/" class="custom-green text-green-600 font-bold px-6 py-3 rounded-lg text-center ">
                            Kembali ke Beranda
                        </a>
                        <a href="#" class="custom-green text-green-600 font-bold px-6 py-3 rounded-lg text-center ">
                            Riwayat Pemesanan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-layout>