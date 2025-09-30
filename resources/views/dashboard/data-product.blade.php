<x-layout-dashboard title="Data Produk">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Tabel Produk</h6>
                        <a href="{{ route('dashboard.product.create') }}" class="btn btn-sm btn-primary">
                            + Tambah Produk
                        </a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Stok
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Harga
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Asal
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nutrisi
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Berat
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('storage/' . $product->image) }}"
                                                            class="avatar avatar-sm me-3" alt="user1">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $product->nama }}</h6>
                                                        <p class="text-xs text-secondary mb-0">
                                                            {{ $product->category->nama }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="">
                                                <p class="text-xs font-weight-bold mb-0">{{ $product->stok }}</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs font-weight-bold mb-0">Rp {{ $product->harga }}</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $product->productDetail->asal ?? 'tidak diketahui' }}</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ $product->productDetail->nutrisi }} gram</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ $product->productDetail->berat }}</p>
                                            </td>
                                            {{-- <td class="align-middle">
                                                <div class="d-flex justify-content-around">
                                                    <a href="javascript:;" onclick="editUser(1)"
                                                        class="text-secondary font-weight-bold text-xs">
                                                        Edit
                                                    </a>
                                                    <a href="javascript:;" onclick="deleteUser(1)"
                                                        class="text-danger font-weight-bold text-xs">
                                                        Hapus
                                                    </a>
                                                </div>
                                            </td> --}}

                                            <td class="align-middle">
                                                <div class="d-flex justify-content-around">
                                                    <!-- Tombol Edit -->
                                                    <a href="{{ route('dashboard.product', $product->id) }}"
                                                        class="text-secondary font-weight-bold text-xs">
                                                        Edit
                                                    </a>

                                                    <!-- Tombol Hapus -->
                                                    <form
                                                        action="{{ route('dashboard.product.destroy', $product->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Yakin mau hapus produk ini?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="text-danger font-weight-bold text-xs border-0 bg-transparent">
                                                            Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="">
                                {{ $products->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-footer-dashboard></x-footer-dashboard>
    </div>
</x-layout-dashboard>

<script>
    function editUser(id) {
        alert("Edit user dengan ID: " + id);
        // bisa diarahkan ke halaman edit
        window.location.href = "/user/" + id + "/edit";
    }

    function deleteUser(id) {
        if (confirm("Yakin mau hapus user ini?")) {
            // contoh kirim fetch API
            fetch('/user/' + id, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }).then(() => {
                alert("User berhasil dihapus");
                location.reload();
            });
        }
    }
</script>
