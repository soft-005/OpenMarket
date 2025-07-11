@extends('includes.frontview')

@section('main')

    
        <!-- Start of Main-->
        <main class="main">
            <div class="container">
                <div class="mt-4 col-12">
                    <div class="row col-12">
                        <div class="col-12">
                            <div class="swiper-container swiper-theme animation-slider pg-inner" data-swiper-options="{
                                'slidesPerView': 1,
                                'autoplay': {
                                    'delay': 8000,
                                    'disableOnInteraction': false
                                }
                            }">
                                <div class="swiper-wrapper row gutter-no cols-1">
                                    <div class="swiper-slide intro-slide intro-slide1 banner banner-fixed br-sm"
                                        style="background-image: url({{ asset('assets/images/banner/2.jpg') }}); background-color: #5D5E62;">
                                        <div class="banner-content x-50 w-100 text-center">
                                            <h3 class="banner-title text-white text-uppercase slide-animate"
                                                data-animation-options="{'name': 'zoomIn', 'duration': '1s'}">Beauty
                                            </h3>
                                            <figure class="slide-animate floating-item" data-animation-options="{
                                                'name': 'fadeInDownShorter', 'duration': '1s', 'delay': '1s'
                                            }" data-options="{'relativeInput':true,'clipRelativeInput':true,'invertX':true,'invertY':true}"
                                                data-child-depth="0.2">
                                                <img src="{{ asset('assets/images/banner/rose.png') }}" alt="Bicycle"
                                                    width="495" height="307" />
                                            </figure>
                                            <p class="ls-25 slide-animate" data-animation-options="{
                                                'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1s'
                                            }">Get Free Shipping on all orders over <strong
                                                    class="text-secondary">$99.00</strong></p>
                                            <a href="shop-banner-sidebar.html"
                                                class="btn btn-white btn-link btn-underline btn-icon-right slide-animate"
                                                data-animation-options="{
                                                    'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1s'
                                                }">
                                                Discover Now<i class="w-icon-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide intro-slide intro-slide2 banner banner-fixed br-sm"
                                        style="background-image: url({{ asset('assets/images/banner/4.jpg') }}); background-color: #EBEDEC;">
                                        <div class="banner-content y-50">
                                            <div class="slide-animate" data-animation-options="{
                                                'name': 'fadeInRightShorter', 'duration': '1s'
                                            }">
                                                <h5 class="banner-subtitle text-uppercase text-primary ls-25">New
                                                    Arrivals
                                                </h5>
                                                <h3 class="banner-title text-capitalize ls-25 mb-0">Men's Fashion</h3>
                                                <div class="banner-price-info text-default font-weight-bold mb-6 ls-50">
                                                    Start at <span class="text-secondary">$12.00</span>
                                                </div>
                                                <a href="shop-banner-sidebar.html" class="btn btn-dark btn-rounded">Shop
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide intro-slide intro-slide3 banner banner-fixed br-sm"
                                        style="background-image: url({{ asset('assets/images/demos/demo5/slides/slide-3.jpg') }}); background-color: #E0E0DE;">
                                        <div class="banner-content text-right y-50">
                                            <div class="slide-animate" data-animation-options="{
                                                'name': 'fadeInUpShorter', 'duration': '1s'
                                            }">
                                                <h5 class="banner-subtitle text-primary text-uppercase">Best Sellers
                                                </h5>
                                                <h3 class="banner-title text-capitalize lh-1 ls-25">New
                                                    Sneaker<br>Collection</h3>
                                                <div class="banner-price-info text-uppercase text-default">
                                                    <strong class="text-dark">Up To 10%</strong> Discount
                                                </div>
                                                <a href="shop-banner-sidebar.html" class="btn btn-dark btn-rounded">Shop
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="col-md-4 d-none">
                            <div class="row">
                                <div class="col-md-12 col-xs-6 mb-4">
                                    <div class="category-banner banner banner-fixed br-sm">
                                        <figure>
                                            <img src="{{ asset('assets/images/demos/demo5/categories/1-1.jpg') }}" alt="Category"
                                                width="330" height="239" style="background-color: #605959;" />
                                        </figure>
                                        <div class="banner-content">
                                            <h3 class="banner-title text-white text-capitalize ls-25">New
                                                Lifestyle<br>Collection</h3>
                                            <h5 class="banner-subtitle text-white text-capitalize ls-25">Discount</h5>
                                            <div class="banner-price-info text-white text-uppercase ls-25">25% Off</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-6 mb-4">
                                    <div class="category-banner banner banner-fixed br-sm">
                                        <figure>
                                            <img src="{{ asset('assets/images/demos/demo5/categories/1-2.jpg') }}" alt="Category"
                                                width="330" height="239" style="background-color: #eff5f5;" />
                                        </figure>
                                        <div class="banner-content">
                                            <h3 class="banner-title text-white text-capitalize ls-25 mb-3">Online
                                                Classic<br>Yoga Sale</h3>
                                            <del class="old-price text-white ls-25">$499.99</del>
                                            <div class="new-price text-secondary ls-25">$299.99</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Intro-wrapper -->

                <div class="swiper-container swiper-theme icon-box-wrapper appear-animate br-sm bg-white"
                    data-swiper-options="{
                    'loop': true,
                    'spaceBetween': 30,
                    'slidesPerView': 1,
                    'autoplay': {
                        'delay': 4000,
                        'disableOnInteraction': false
                    },
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 2
                        },
                        '992': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }}">
                    <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                        <div class="swiper-slide icon-box icon-box-side text-dark">
                            <span class="icon-box-icon icon-shipping">
                                <i class="w-icon-truck"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bolder ls-normal">Free Shipping & Returns</h4>
                                <p class="text-default">For all orders over $99</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark">
                            <span class="icon-box-icon icon-payment">
                                <i class="w-icon-bag"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bolder ls-normal">Secure Payment</h4>
                                <p class="text-default">We ensure secure payment</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark icon-box-money">
                            <span class="icon-box-icon icon-money">
                                <i class="w-icon-money"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bolder ls-normal">Money Back Guarantee</h4>
                                <p class="text-default">Any back within 30 days</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark icon-box-chat">
                            <span class="icon-box-icon icon-chat">
                                <i class="w-icon-chat"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bolder ls-normal">Customer Support</h4>
                                <p class="text-default">Call or email us 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Iocn Box Wrapper -->

                <div class="title-link-wrapper title-deals appear-animate mb-4" id="deals">
                    <h2 class="title title-link">Deals Of The Day</h2>
                    <div
                        class="product-countdown-container font-size-sm text-white bg-secondary align-items-center mr-auto">
                        <label>Offer Ends in: </label>
                        <div class="product-countdown countdown-compact ml-1 font-weight-bold" data-until="+10d"
                            data-relative="true" data-compact="true">10days,00:00:00</div>
                    </div>
                    <a href="#" class="ml-0">More Products<i class="w-icon-long-arrow-right"></i></a>
                </div>
                <div class="swiper-container swiper-theme appear-animate mb-6" data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 4
                        },
                        '992': {
                            'slidesPerView': 5
                        }
                    }
                     }">
                    <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                        @foreach($products as $p)
                            <div class="swiper-slide product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="{{ route('preview', ['slug' => $p->slug]) }}">
                                            <img src="{{ $p->featured }}" alt="Product"
                                                width="300" height="338">
                                            <img src="{{ $p->featured }}" alt="Product"
                                                width="300" height="338">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="{{ route('cart.store', ['slug' => $p->slug,'qty' => 1]) }}" class="btn-product-icon w-icon-cart"
                                                title="Add to cart"></a>
                                                <!-- class="btn-product-icon btn-cart w-icon-cart" -->
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="{{ route('preview', ['slug' => $p->slug]) }}">{{ $p->title }}</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="{{ route('preview', ['slug' => $p->slug]) }}" class="rating-reviews">(1 Reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">${{ $p->price }}</ins><del class="old-price">$199.89</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Wrap -->
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- End of Prodcut Deals Wrapper -->


                <div class="category-banner-wrapper appear-animate row mb-5">
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed br-sm">
                            <figure>
                                <img src="{{ asset('assets/images/demos/demo5/categories/2-1.jpg') }}" alt="Category Banner"
                                    width="680" height="180" style="background-color: #EAEAEA;" />
                            </figure>
                            <div class="banner-content y-50">
                                <h5 class="banner-subtitle text-capitalize font-weight-normal ls-25">From Online Store
                                </h5>
                                <h3 class="banner-title text-capitalize ls-10">Cosmetic Sale</h3>
                                <a href="shop-banner-sidebar.html"
                                    class="btn btn-dark btn-link btn-underline btn-icon-right">
                                    Discover Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed br-sm">
                            <figure>
                                <img src="{{ asset('assets/images/demos/demo5/categories/2-2.jpg') }}" alt="Category Banner"
                                    width="680" height="180" style="background-color: #565960;" />
                            </figure>
                            <div class="banner-content y-50">
                                <h5 class="banner-subtitle text-white text-capitalize font-weight-normal ls-25">Season
                                    Collection</h5>
                                <h3 class="banner-title text-white text-capitalize">New Fashion Style</h3>
                                <a href="shop-banner-sidebar.html"
                                    class="btn btn-white btn-link btn-underline btn-icon-right">
                                    Discover Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Category Banner Wrapper -->

            </div>
            <!-- End of Container -->

            <section class="grey-section appear-animate pt-10 pb-10">
                <div class="container mb-2">
                    <div class="title-link-wrapper mb-4">
                        <h2 class="title title-link">{{ $categories->where('id',1)[0]->name }} Products</h2>
                        <a href="#">More Products<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                    <div class="swiper-container swiper-theme appear-animate mb-6" data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 4
                        },
                        '992': {
                            'slidesPerView': 5
                        }
                    }
                     }">
                    <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                    @foreach($products_fashion as $p)
                        <div class="swiper-slide product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="{{ route('preview', ['slug' => $p->slug]) }}">
                                        <img src="{{ $p->featured }}" alt="Product"
                                            width="300" height="338">
                                        <img src="{{ $p->featured }}" alt="Product"
                                            width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="{{ route('cart.store', ['slug' => $p->slug,'qty' => 1]) }}" class="btn-product-icon w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="{{ route('preview', ['slug' => $p->slug]) }}">{{ $p->title }}</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="{{ route('preview', ['slug' => $p->slug]) }}" class="rating-reviews">(1 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">${{ $p->price }}</ins><del class="old-price">${{ $p->price }}.89</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                    @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                    
                </div>
                <!-- End of Container -->
            </section>
            <!-- End of Grey Section -->

            <div class="container mt-10 pt-2">
                <div class="banner banner-simple appear-animate br-sm mb-10" style="background-image: url({{ asset('assets/images/demos/demo5/banners/1.jpg') }});
                    background-color: #414548;">
                    <div class="banner-content align-items-center">
                        <div class="banner-price-info">
                            <div class="discount text-secondary font-weight-bolder ls-25 lh-1">
                                40<sup class="font-weight-bold p-relative">%</sup>
                                <sub class="font-weight-bold text-uppercase p-relative ls-normal">Off</sub>
                            </div>
                            <p class="text-white font-weight-bolder text-capitalize mb-0 ls-10">2021 Collection</p>
                        </div>
                        <hr class="divider bg-white">
                        <div class="banner-info mb-0">
                            <h3 class="banner-title text-white font-weight-normal ls-25">
                                We are the Leading<br>
                                <strong>Ski Tool Saler in US</strong>
                            </h3>
                            <a href="shop-banner-sidebar.html"
                                class="btn btn-primary btn-link btn-underline btn-icon-right">
                                Discover Now<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <figure class="skrollable">
                        <img src="{{ asset('assets/images/demos/demo5/banners/ski.png') }}" alt="Banner"
                            data-bottom-top="transform: translateY(5vh);"
                            data-top-bottom="transform: translateY(-5vh);">
                    </figure>
                </div>
                <!-- End of Banner Simple -->


                <h2 class="title text-left title-client  mb-5 appear-animate">Our Clients</h2>
                <div class="swiper-container swiper-theme  brands-wrapper br-sm mb-10 appear-animate"
                    data-swiper-options="{
                    'autoplay': false,
                    'autoplayTimeout': 4000,
                    'loop': true,
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 4
                        },
                        '992': {
                            'slidesPerView': 6
                        },
                        '1200': {
                            'slidesPerView': 8
                        }
                    }
                }">
                    <div class="swiper-wrapper row cols-xl-8 cols-lg-6 cols-md-4 cols-sm-3 cols-2">

                        <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/images/demos/demo5/brands/1.png') }}" alt="Brand" width="310"
                                    height="180" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/images/demos/demo5/brands/2.png') }}" alt="Brand" width="310"
                                    height="180" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/images/demos/demo5/brands/3.png') }}" alt="Brand" width="310"
                                    height="180" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/images/demos/demo5/brands/4.png') }}" alt="Brand" width="310"
                                    height="180" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/images/demos/demo5/brands/5.png') }}" alt="Brand" width="310"
                                    height="180" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/images/demos/demo5/brands/6.png') }}" alt="Brand" width="310"
                                    height="180" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/images/demos/demo5/brands/7.png') }}" alt="Brand" width="310"
                                    height="180" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/images/demos/demo5/brands/8.png') }}" alt="Brand" width="310"
                                    height="180" />
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- End of Brands Wrapper -->




               
            </div>
        </main>
        <!-- End of Main -->

@stop