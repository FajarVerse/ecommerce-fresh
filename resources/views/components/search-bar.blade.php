@props(['action', 'placeholder' => 'Cari produk...'])

<form action="{{ $action }}" method="GET" class="w-100">
    <div class="input-group">
        <input type="search" 
               name="q" 
               class="form-control p-3" 
               placeholder="{{ $placeholder }}" 
               value="{{ request('q') }}">
        <button type="submit" class="input-group-text p-3">
            <i class="fa fa-search"></i>
        </button>
    </div>
</form>
