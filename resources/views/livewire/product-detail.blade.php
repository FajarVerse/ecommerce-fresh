    @props(['product'])

    <div>
        <div class="input-group quantity mb-5" style="width: 100px;">
            <div class="input-group-btn">
                <button type="button" class="btn btn-sm btn-minus rounded-circle bg-light border"
                    wire:click="decrement({{ $product->id }})">
                    <i class="fa fa-minus"></i>
                </button>
            </div>
            <input type="text" class="form-control form-control-sm text-center border-0 quantity-input"
                wire:model="quantities.{{ $product->id }}">
            <div class="input-group-btn">
                <button type="button" class="btn btn-sm btn-plus rounded-circle bg-light border"
                    wire:click="increment({{ $product->id }})">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
        </div>
        <form id="add-to-cart-form" action="{{ route('cart.store') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" name="qty" value="{{ $quantities[$product->id] }}">
            <button type="submit" class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary">
                <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
            </button>
        </form>

    </div>
