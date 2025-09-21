  <!-- Fruits Shop Start-->
  @props(['products', 'categories'])
  <div class="container-fluid fruite py-5">
      <div class="container py-5">
          <h1 class="mb-4">Toko serba Fresh</h1>
          <div class="row g-4">
              <div class="col-lg-12">
                  <div class="row g-4">
                      
                          
                            <div class="col-xl-3">
                                <x-search-bar :action="route('search')" placeholder="Cari buah..." />
                            
                          
                      </div>
                      <div class="col-6"></div>
                      <div class="col-xl-3">
                          <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                              <label for="fruits">Filter :</label>
                              <form action="{{ route('search') }}" method="GET" id="fruitform">
                                    <select id="fruits" name="sort" class="border-0 form-select-sm bg-light me-3" onchange="this.form.submit()">
                                        <option value="">-- Urutkan --</option>
                                        <option value="low_price" {{ request('sort') == 'low_price' ? 'selected' : '' }}>Harga Terendah</option>
                                        <option value="high_price" {{ request('sort') == 'high_price' ? 'selected' : '' }}>Harga Tertinggi</option>
                                    </select>
                                </form>
                          </div>
                      </div>
                  </div>
                  <div class="row g-4">
                      <div class="col-lg-3">
                          <div class="row g-4">
                              <div class="col-lg-12">
                                  <div class="mb-3">
                                      <h4>Categori</h4>
                                        <ul class="list-unstyled fruite-categorie">
        @foreach ($categories as $category)
            <li>
                <div class="d-flex justify-content-between fruite-name">
                    <a href="/category/{{ $category->id }}">{{ $category->nama }}
                        <span>
                            @if ($category->nama == 'Semua')
                                ({{ $totalProducts ?? 0 }})
                            @else
                                ({{ $category->product_count ?? 0 }})
                            @endif
                        </span>
                    </a>
                </div>
            </li>
        @endforeach
    </ul>
                                  </div>
                              </div>
                              <div class="col-lg-12">
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-9">
                          <div class="row g-4 justify-content-center">
                              <div class="card-layout">
                                  @foreach ($products as $product)
                                      <x-card-product :product="$product" :category="$product->category"></x-card-product>
                                  @endforeach
                              </div>
                              <div class="">
                                  <div class="">
                                      {{ $products->links() }}
                                  </div>
                                {{-- <div class="d-flex justify-content-center mt-4">
                                    {{ $products->links() }}
                                </div> --}}
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Fruits Shop End-->
