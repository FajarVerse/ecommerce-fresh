  <!-- Fruits Shop Start-->
  @props(['products', 'categories'])
  <div class="container-fluid fruite py-5">
      <div class="container py-5">
          <h1 class="mb-4">Fresh fruits shop</h1>
          <div class="row g-4">
              <div class="col-lg-12">
                  <div class="row g-4">
                      <div class="col-xl-3">
                          <div class="input-group w-100 mx-auto d-flex">
                              <input type="search" class="form-control p-3" placeholder="keywords"
                                  aria-describedby="search-icon-1">
                              <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                          </div>
                      </div>
                      <div class="col-6"></div>
                      <div class="col-xl-3">
                          <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                              <label for="fruits">Default Sorting:</label>
                              <select id="fruits" name="fruitlist" class="border-0 form-select-sm bg-light me-3"
                                  form="fruitform">
                                  <option value="volvo">Nothing</option>
                                  <option value="saab">Popularity</option>
                                  <option value="opel">Organic</option>
                                  <option value="audi">Fantastic</option>
                              </select>
                          </div>
                      </div>
                  </div>
                  <div class="row g-4">
                      <div class="col-lg-3">
                          <div class="row g-4">
                              <div class="col-lg-12">
                                  <div class="mb-3">
                                      <h4>Categories</h4>
                                        <ul class="list-unstyled fruite-categorie">
                                          @foreach ($categories as $category)
                                              <li>
                                                  <div class="d-flex justify-content-between fruite-name">
                                                      <a href="/category/{{ $category->id }}">{{ $category->nama }}
                                                          <span>({{ $category->product_count }})</span>
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
                                      <x-card-product :product="$product"></x-card-product>
                                  @endforeach
                              </div>
                              <div class="">
                                  <div class="">
                                      {{ $products->links() }}
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Fruits Shop End-->
