<x-layout-dashboard title="Tambah Product">
    <div class="col-md-12">
        <div class="card">
            <form action="{{ route('dashboard.category.store') }}" method="POST" enctype="multipart/form-data"
                class="col-md-12">
                @csrf
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Tambahh Kategori</p>
                        <button type="submit" class="btn btn-success btn-sm ms-auto">Simpan</button>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-uppercase text-sm">Informasi Kategori</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Nama</label>
                                <input class="form-control" type="text" name="name">

                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout-dashboard>
