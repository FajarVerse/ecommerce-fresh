

@section('content')
    <div class="container">
        <h1>Wishlist Saya</h1>
        @if (auth()->user()->wishlists->isEmpty())
            <p>Wishlist kamu masih kosong.</p>
        @else
            <div class="row g-4">
                @foreach (auth()->user()->wishlists as $wishlist)
                
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ asset('storage/' . $wishlist->product->image) }}" class="card-img-top" alt="{{ $wishlist->product->nama }}" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $wishlist->product->nama }}</h5>
                                <p class="card-text">Rp {{ number_format($wishlist->product->harga, 0, ',', '.') }}</p>
                                <form action="{{ route('wishlist.remove', $wishlist->product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus dari Wishlist</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection

