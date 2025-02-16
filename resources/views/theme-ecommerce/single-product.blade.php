<!-- head -->
@include('theme-ecommerce.header')
<!-- single product -->
<section class="mainContent clearfix">
  <div class="container">
    <div class="row singleProduct">
      <div class="col-md-12">
        <div class="media flex-wrap mb-5">
          <div class="media-left productSlider">
            <div id="carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner SingleProductItem">
                <!-- <div class="video-icon">
                  <a class="video-link" data-fancybox href="https://www.youtube.com/embed/g3-VxLQO7do?autoplay=1">
                    <i class="fa fa-play play-icon" aria-hidden="true"></i>
                  </a>
                </div> -->

                @foreach($images as $image)
                <div class="carousel-item active productImage SingleProductImage" data-thumb="{{$loop->index}}">
                  <img src="{{$image->imagen_url}}">
                  <a data-fancybox="images" href="{{$image->imagen_url}}" class="product-content">
                    <div class="MaskingIcon"><i class="fa fa-plus"></i></div>
                  </a>
                </div>
                @endforeach

                <!-- <div class="carousel-item active productImage SingleProductImage" data-thumb="0">
                  <img src="/resourcesEcommerce/img/products/signle-product/product-slide-big-01.jpg">
                  <a data-fancybox="images" href="/resourcesEcommerce/img/products/signle-product/product-slide-large-01.jpg" class="product-content">
                    <div class="MaskingIcon"><i class="fa fa-plus"></i></div>
                  </a>
                </div>

                <div class="carousel-item SingleProductImage" data-thumb="1">
                  <img src="/resourcesEcommerce/img/products/signle-product/product-slide-big-02.jpg">
                  <a data-fancybox="images" href="/resourcesEcommerce/img/products/signle-product/product-slide-large-02.jpg" class="product-content">
                    <div class="MaskingIcon"><i class="fa fa-plus"></i></div>
                  </a>
                </div>

                <div class="carousel-item SingleProductImage" data-thumb="2">
                  <img src="/resourcesEcommerce/img/products/signle-product/product-slide-big-03.jpg">
                  <a data-fancybox="images" href="/resourcesEcommerce/img/products/signle-product/product-slide-large-03.jpg" class="product-content">
                    <div class="MaskingIcon"><i class="fa fa-plus"></i></div>
                  </a>
                </div>

                <div class="carousel-item SingleProductImage" data-thumb="3">
                  <img src="/resourcesEcommerce/img/products/signle-product/product-slide-big-04.jpg">
                  <a data-fancybox="images" href="/resourcesEcommerce/img/products/signle-product/product-slide-large-04.jpg" class="product-content">
                    <div class="MaskingIcon"><i class="fa fa-plus"></i></div>
                  </a>
                </div> -->
              </div>
            </div>
            
            <div class="clearfix">
              <div id="thumbcarousel" class="carousel slide" data-interval="false">
                <div class="carousel-inner">
                  @foreach($images as $image)
                    <div data-target="#carousel" data-slide-to="{{$loop->index}}" class="thumb"><img src="{{$image->imagen_url}}"></div>
                  @endforeach
                </div>
                <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="media-body">
            <ul class="list-inline">
              <li class="mb-4 mb-md-0">
                <a href="/"><i class="fa fa-reply" aria-hidden="true"></i>
                  Continuar comprando
                </a>
              </li>

              <!-- <li class="share-all mr-0">
                <a class="social-link" href="javascript:void(0)"><i class="fa fa-plus" aria-hidden="true"></i>
                    Share This
                </a>

                <span class="all-link">
                  <a class="SingleSocialIcon" href="javascript:void(0)">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>

                  <a class="SingleSocialIcon" href="javascript:void(0)">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>

                  <a class="SingleSocialIcon" href="javascript:void(0)">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>

                  <a class="SingleSocialIcon" href="javascript:void(0)">
                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                  </a>
                </span>
              </li> -->
            </ul>

            <h2>{{$product->producto_nombre}}</h2>
            <h3>{{number_format($product->producto_precio,2,',','.')}}</h3>
            <p>{{$product->producto_descripcioncorta}}</p>
            <!-- <div class="row">
              <div class="col-12">
                <span class="quick-drop resizeWidth quantityWidth single-quick-drop">
                  <select name="guiest_id3" id="guiest_id3" class="select-drop">
                    <option value="0">Size</option>
                    <option value="1">6.5</option>
                    <option value="2">7</option>
                    <option value="3">8</option>
                    <option value="4">8.5</option>
                    <option value="5">9.5</option>
                    <option value="6">10</option>
                    <option value="7">11</option>
                    <option value="8">12</option>
                    <option value="9">12.5</option>
                    <option value="10">13</option>
                  </select>
                </span>
              </div>

              <div class="col-12">
                <div class="d-flex align-items-center mb-5 pt-3">
                  <h5 class="mr-4">Quantity:</h5>
                  <div class="SingleCartListInner cartListInner pl-1">
                    <form action="#">
                      <div class="table-responsive">
                        <table class="table">
                          <tbody>
                            <tr class="border-0">
                              <td class="count-input border-0 p-0">
                                <a class="incr-btn" data-action="decrease" href="#"><i class="fa fa-minus"></i></a>
                                <input class="quantity" type="text" value="1">
                                <a class="incr-btn" data-action="increase" href="#"><i class="fa fa-plus"></i></a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div> -->
          
            <div class="btn-area mb-0">
              <a href="#" onclick="addToCart({{$product->producto_id}},{{$product->producto_precio}},'{{$product->producto_nombre}}','{{$images[0]->imagen_url}}')" class="btn btn-primary btn-default">Agregar al carrito <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>

            <div class="tabArea d-none">
              <ul class="nav nav-tabs bar-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#detalle">Detalle</a></li>
                <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#about-art">about art</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sizing">sizing</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#shipping">shipping</a></li> -->
              </ul>
              <div class="tab-content">
                <div id="detalle" class="tab-pane fade show active">
                  {{$product->producto_descripcion}}
                  <!-- <p>LContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin liter ature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                  <ul class="list-unstyled">
                    <li>Black, Crew Neck</li>
                    <li>75% Cotton, 25% Rayon</li>
                    <li>Waterbased Ink</li>
                    <li>Wash Cold, dry low</li>
                  </ul> -->
                </div>
                <!-- <div id="about-art" class="tab-pane fade">
                  <p>Nulla facilisi. Mauris efficitur, massa et iaculis accumsan, mauris velit ultrices purus, quis condimentum nibh dolor ut tortor. Donec egestas tortor quis mattis gravida. Ut efficitur elit vitae dignissim volutpat. </p>
                </div>
                <div id="sizing" class="tab-pane fade">
                  <p>Praesent dui felis, gravida a auctor at, facilisis commodo ipsum. Cras eu faucibus justo. Nullam varius cursus nisi, sed elementum sem sagittis at. Nulla tellus massa, vestibulum a commodo facilisis, pulvinar convallis nunc.</p>
                </div>
                <div id="shipping" class="tab-pane fade">
                  <p>Mauris lobortis augue ex, ut faucibus nisi mollis ac. Sed volutpat scelerisque ex ut ullamcorper. Cras at velit quis sapien dapibus laoreet a id odio. Sed sit amet accumsan ante, eu congue metus. Aenean eros tortor, cursus quis feugiat sed, vestibulum vel purus.</p>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row singleProduct singleProductTab">
      <div class="col-12">
        <div class="media mb-4">
          <div class="media-body">
            <div class="tabArea">
              <ul class="nav nav-tabs bar-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#OurDetails">Detalle</a></li>
                <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#OurSizing">Sizing</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Reviews">Reviews</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#OurShipping">shipping</a></li> -->
              </ul>
              <div class="tab-content">
                <div id="OurDetails" class="tab-pane fade show active">
                  {{$product->producto_descripcion}}
                  <!-- <p>LContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                    Latin
                    liter ature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                    Hampden-Sydney
                    College in Virginia.</p>
                  <ul class="list-unstyled">
                    <li>Black, Crew Neck</li>
                    <li>75% Cotton, 25% Rayon</li>
                    <li>Waterbased Ink</li>
                    <li>Wash Cold, dry low</li>
                  </ul> -->
                </div>

                <!-- <div id="OurSizing" class="tab-pane fade">
                  <div class="SingleCartListWrapper SingleCartSizing">
                    <div class="cartListInner">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Inches</th>
                              <th>US size</th>
                              <th>EN size</th>
                            </tr>
                          </thead>

                          <tbody>
                            <tr>
                              <td class="">9.65</td>
                              <td class="">6.5</td>
                              <td class="">39</td>
                            </tr>

                            <tr>
                              <td class="">9.84</td>
                              <td class="">7</td>
                              <td class="">40</td>
                            </tr>

                            <tr>
                              <td class="">10.04</td>
                              <td class="">8</td>
                              <td class="">41</td>
                            </tr>

                            <tr>
                              <td class="">10.24</td>
                              <td class="">8.5</td>
                              <td class="">42</td>
                            </tr>

                            <tr>
                              <td class="">10.43</td>
                              <td class="">9.5</td>
                              <td class="">43</td>
                            </tr>

                            <tr>
                              <td class="">10.63</td>
                              <td class="">10.0</td>
                              <td class="">44</td>
                            </tr>

                            <tr>
                              <td class="">10.83</td>
                              <td class="">11.0</td>
                              <td class="">45</td>
                            </tr>

                            <tr>
                              <td class="">11.02</td>
                              <td class="">12.0</td>
                              <td class="">46</td>
                            </tr>

                            <tr>
                              <td class="">11.2</td>
                              <td class="">12.5</td>
                              <td class="">47</td>
                            </tr>

                            <tr>
                              <td class="">11.42</td>
                              <td class="">13</td>
                              <td class="">48</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="Reviews" class="tab-pane fade">
                  <div class="media mb-5">
                    <img class="mr-4 rounded rounded-circle" src="/resourcesEcommerce/img/blog/blog-small2-01.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <h4 class="mt-0 mb-2">Lorem ipsum dolor</h4>

                      <ul class="text-warning d-flex mb-1">
                        <li class="mr-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li class="mr-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li class="mr-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li class="mr-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li class=""><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                      </ul>

                      <p class="mt-0 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio dolorum quasi magni mollitia suscipit blanditiis nihil id autem? Voluptates, minima expedita doloremque amet consequuntur quam aliquid repellat architecto accusamus fuga.</p>
                      <h6 class="mt-0"><em>Rodney Artichoke</em></h6>
                    </div>
                  </div>

                  <div class="media mb-5">
                    <img class="mr-4 rounded rounded-circle" src="/resourcesEcommerce/img/blog/blog-small-02.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <h4 class="mt-0 mb-2">Feugiat primis</h4>

                      <ul class="text-warning d-flex mb-1">
                        <li class="mr-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li class="mr-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li class="mr-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li class="mr-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li class=""><i class="fa fa-star-o" aria-hidden="true"></i></li>
                      </ul>

                      <p class="mt-0 mb-3">Feugiat primis reprehenderit proident cumque nec diam eligendi, qui iure, torquent quod sequi, taciti! Tempus leo
                      architecto accusantium cillum, taciti nascetur? Iusto facilisi dolores adipisci eros fuga, laoreet culpa molestie, arcu
                      lectus felis sunt accusantium alias mollitia eius anim eget. voluptatibus facilisi.</p>
                      <h6 class="mt-0"><em>Samanta Doe</em></h6>
                    </div>
                  </div>

                  <div class="media mb-0">
                    <img class="mr-4 rounded rounded-circle" src="/resourcesEcommerce/img/blog/blog-small-03.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <h4 class="mt-0 mb-2">Auctor vitae egestas</h4>

                      <ul class="text-warning d-flex mb-1">
                        <li class="mr-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li class="mr-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li class="mr-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li class="mr-1"><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li class=""><i class="fa fa-star" aria-hidden="true"></i></li>
                      </ul>

                      <p class="mt-0 mb-2">Auctor vitae egestas et. Accumsan quis nunc. Duis leo justo. Condimentum at purus eu. Amana sed dolor sem. Etiam massa
                      libero. massa libero, auctor vitae egestas et, accumsan quis nunc. Dous leou justi, condimentam at purus eus actor.
                      Auctor vitae egestas et duis Condimentum at purus eu. Aemean sed dolor sem. Etiam massa libero.</p>
                      <h6 class="mt-0"><em>Amanda Smith</em></h6>
                    </div>
                  </div>

                  <div class="mt-5 mb-2 border p-4 p-md-5">
                    <form>
                      <div class="media flex-column flex-md-row mb-0">
                        <img class="m-auto m-md-0 mr-md-4 rounded rounded-circle" src="/resourcesEcommerce/img/blog/profile-image.jpg" alt="Generic placeholder image">
                        
                        <div class="media-body mt-4 mt-md-0">
                          <h6 class="text-center text-md-left text-capitalize mt-0"><em>Rodney samp</em></h6>
                          <h6 class="text-center text-md-left ReviewsPost mt-0">Posting publicly</h6>
                      
                          <div class="rating-view mb-4">
                            <span class="add-rating-large pl-0 m-auto m-md-0"></span>
                          </div>

                          <div class="row">
                            <div class="form-group col-md-12">
                              <input type="text" class="form-control" id="exampleInputPhone" placeholder="Subject" required="">
                            </div>

                            <div class="form-group col-md-12">
                              <textarea class="form-control" id="exampleTextarea" rows="5" placeholder="Review"></textarea>
                            </div>
                          </div>

                          <div class="text-center text-md-left">
                            <button type="submit" class="btn btn-default btn-primary custom-btn">Submit Review</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <div id="OurShipping" class="tab-pane fade">
                  <div class="SingleCartListWrapper SingleCartShipping">
                    <div class="cartListInner">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Shipping method</th>
                              <th>Estimated Time</th>
                              <th>Fees</th>
                            </tr>
                          </thead>

                          <tbody>
                            <tr>
                              <td class="">
                                <div class="custom-control custom-radio single-custom-control">
                                  <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" checked="">
                                  <label class="custom-control-label" for="customRadio3"><span class="d-block" style="margin-top: 3px;">Pickup from
                                      store</span></label>
                                </div>
                              </td>
                            
                              <td class="">—</td>
                              <td class="">$0</td>
                            </tr>

                            <tr>
                              <td class="">
                                <div class="custom-control custom-radio single-custom-control">
                                  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadio2"><span class="d-block" style="margin-top: 3px;">Local
                                      Shipping</span></label>
                                </div>
                              </td>
                            
                              <td class="">2-7 days</td>
                              <td class="">$4</td>
                            </tr>

                            <tr>
                              <td class="">
                                <div class="custom-control custom-radio single-custom-control">
                                  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadio1"><span class="d-block" style="margin-top: 3px;">Courier</span></label>
                              </td>

                              <td class="">3-5 days</td>
                              <td class="">$5</td>
                            </tr>
                
                            <tr>
                              <td class="">
                                <div class="custom-control custom-radio single-custom-control">
                                  <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadio4"><span class="d-block" style="margin-top: 3px;">International Shipping</span></label>
                                </div>
                              </td>
                              
                              <td class="">7-15 days</td>
                              <td class="">$15</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="page-header">
      <h4>Related Products</h4>
    </div>
    <div class="row productsContent">
      
      <div class="col-md-3 col-12 ">
        <div class="productBox">
          <div class="productImage clearfix">
            <img src="/resourcesEcommerce/img/products/products-01.jpg" alt="products-img">
            <div class="productMasking">
              <ul class="list-inline btn-group" role="group">
                <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart-o"></i></a></li>
                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
                <li><a class="btn btn-default" data-toggle="modal" href=".quick-view" ><i class="fa fa-eye"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="productCaption clearfix">
          <h5>Nike Sportswear</h5>
          <h3>$199</h3>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 ">
        <div class="productBox">
          <div class="productImage clearfix">
            <img src="/resourcesEcommerce/img/products/products-02.jpg" alt="products-img">
            <div class="productMasking">
              <ul class="list-inline btn-group" role="group">
                <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart-o"></i></a></li>
                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
                <li><a class="btn btn-default" data-toggle="modal" href=".quick-view" ><i class="fa fa-eye"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="productCaption clearfix">
          <h5>Dip Dyed Sweater</h5>
          <h3>$249</h3>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 ">
        <div class="productBox">
          <div class="productImage clearfix">
            <img src="/resourcesEcommerce/img/products/products-03.jpg" alt="products-img">
            <div class="productMasking">
              <ul class="list-inline btn-group" role="group">
                <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart-o"></i></a></li>
                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
                <li><a class="btn btn-default" data-toggle="modal" href=".quick-view" ><i class="fa fa-eye"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="productCaption clearfix">
          <h5>Scarf Ring Corner</h5>
          <h3>$179</h3>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12 ">
        <div class="productBox">
          <div class="productImage clearfix">
            <img src="/resourcesEcommerce/img/products/products-04.jpg" alt="products-img">
            <div class="productMasking">
              <ul class="list-inline btn-group" role="group">
                <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart-o"></i></a></li>
                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
                <li><a class="btn btn-default" data-toggle="modal" href=".quick-view" ><i class="fa fa-eye"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="productCaption clearfix">
          <h5>Sun Buddies</h5>
          <h3>$149</h3>
          </div>
        </div>
      </div>
    </div> -->
  </div>
</section>

<!-- footer -->
@include('theme-ecommerce.footer')