<x-layout-dashboard title="Pesanan">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Tabel Kategori</h6>
                        <a href="{{ route('dashboard.category.create') }}" class="btn btn-sm btn-primary">
                            + Tambah Kategori
                        </a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Kategori
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-3 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $category->nama ?? '-' }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="align-middle">
                                                <div class="d-flex justify-content-around">
                                                    <!-- Tombol Edit -->
                                                    <a href="{{ route('dashboard.category.edit', $category->id) }}"
                                                        class="text-secondary font-weight-bold text-xs">
                                                        Edit
                                                    </a>

                                                    <!-- Tombol Hapus -->
                                                    <form
                                                        action="{{ route('dashboard.category.destroy', $category->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Yakin mau hapus kategori ini?')">
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

                            {{-- Pagination --}}
                            <div class="mt-3 px-3">
                                {{ $categories->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-footer-dashboard></x-footer-dashboard>
    </div>
</x-layout-dashboard>
