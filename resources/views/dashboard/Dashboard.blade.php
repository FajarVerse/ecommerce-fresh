<x-layout-dashboard title="Dashboard">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Penjualan</p>
                                    <h5 class="font-weight-bolder">
                                        @php
                                            $total_penjualan = \App\Models\Order::sum('total') ?? 0;
                                            echo 'Rp ' . number_format($total_penjualan, 0, ',', '.');
                                        @endphp
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">
                                            @php
                                                $yesterday_total =
                                                    \App\Models\Order::whereDate(
                                                        'created_at',
                                                        \Carbon\Carbon::yesterday(),
                                                    )->sum('total_harga') ?? 0;
                                                $persen_penjualan =
                                                    $yesterday_total > 0
                                                        ? (($total_penjualan - $yesterday_total) / $yesterday_total) *
                                                            100
                                                        : 0;
                                                echo number_format($persen_penjualan, 2) . '%';
                                            @endphp
                                        </span>
                                        sejak kemarin
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah Pesanan Hari Ini</p>
                                    <h5 class="font-weight-bolder">
                                        @php
                                            $pesanan_hari_ini = \App\Models\Order::whereDate(
                                                'created_at',
                                                \Carbon\Carbon::today(),
                                            )->count();
                                            echo $pesanan_hari_ini;
                                        @endphp
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">
                                            @php
                                                $last_week_count = \App\Models\Order::whereDate(
                                                    'created_at',
                                                    '>',
                                                    \Carbon\Carbon::today()->subDays(7),
                                                )->count();
                                                $persen_pesanan =
                                                    $last_week_count > 0
                                                        ? (($pesanan_hari_ini - $last_week_count) / $last_week_count) *
                                                            100
                                                        : 0;
                                                echo number_format($persen_pesanan, 2) . '%';
                                            @endphp
                                        </span>
                                        sejak minggu lalu
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah Produk</p>
                                    <h5 class="font-weight-bolder">
                                        @php
                                            $jumlah_produk = \App\Models\Product::count();
                                            echo $jumlah_produk;
                                        @endphp
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-danger text-sm font-weight-bolder">
                                            @php
                                                $last_quarter_count = \App\Models\Product::where(
                                                    'created_at',
                                                    '>',
                                                    \Carbon\Carbon::now()->subMonths(3),
                                                )->count();
                                                $persen_produk =
                                                    $last_quarter_count > 0
                                                        ? (($jumlah_produk - $last_quarter_count) /
                                                                $last_quarter_count) *
                                                            100
                                                        : 0;
                                                echo number_format($persen_produk, 2) . '%';
                                            @endphp
                                        </span>
                                        sejak kuartal lalu
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <i class="ni ni-box-2 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Pengguna Aktif</p>
                                    <h5 class="font-weight-bolder">
                                        @php
                                            $pengguna_aktif = \App\Models\User::where(
                                                'last_login',
                                                '>=',
                                                \Carbon\Carbon::now()->subMonth(),
                                            )->count();
                                            echo $pengguna_aktif;
                                        @endphp
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">
                                            @php
                                                $last_month_active = \App\Models\User::where(
                                                    'last_login',
                                                    '>=',
                                                    \Carbon\Carbon::now()->subMonths(2),
                                                )
                                                    ->where('last_login', '<', \Carbon\Carbon::now()->subMonth())
                                                    ->count();
                                                $persen_pengguna =
                                                    $last_month_active > 0
                                                        ? (($pengguna_aktif - $last_month_active) /
                                                                $last_month_active) *
                                                            100
                                                        : 0;
                                                echo number_format($persen_pengguna, 2) . '%';
                                            @endphp
                                        </span>
                                        dibanding bulan lalu
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                    <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-7 mb-lg-0 mb-4">

            </div>
            <div class="col-lg-5">
            </div>
        </div>
        <div class="row mt-4">
        </div>
    </div>
</x-layout-dashboard>
