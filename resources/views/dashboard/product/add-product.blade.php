<x-layout-dashboard title="Tambah Product">
    <div class="col-md-12">
        <div class="card">
            <form action="{{ route('dashboard.product.store') }}" method="POST" enctype="multipart/form-data" class="col-md-12">
                @csrf
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Edit Profil</p>
                        <button type="submit" class="btn btn-success btn-sm ms-auto">Simpan</button>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-uppercase text-sm">Informasi Pengguna</p>
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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Harga</label>
                                <input class="form-control" type="number" name="harga" placeholder="">

                                @error('harga')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Stok</label>
                                <input class="form-control" type="number" name="stok" placeholder="">

                                @error('stok')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Berat 1 Produk (gram)</label>
                                <input class="form-control" type="number" name="berat" placeholder="satuan gram">

                                @error('berat')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Nutrisi</label>
                                <input class="form-control" type="text" name="nutrisi" placeholder="nama vitamin">

                                @error('nutrisi')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Asal</label>
                                <input class="form-control" type="text" name="asal" placeholder="">

                                @error('asal')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Deskripsi</label>
                                <input class="form-control" type="text" name="deskripsi" placeholder="">

                                @error('deskripsi')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Gambar</label>
                                <input class="form-control" type="file" name="image" placeholder="" accept="image/jpeg, image/png, image/jpg">

                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="category" class="form-control-label">Kategori</label>
                                <select name="category_id" id="category" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->nama }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    </div>
</x-layout-dashboard>
