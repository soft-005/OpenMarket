<?php 
 use Illuminate\Support\Str;
?>
@extends('includes.frontview')

@section('main')
   

    <div class="container my-5 py-5 mb-6 mt-6">
                <div class="title-link-wrapper title-deals appear-animate mb-4 mt-5">
                    <h2 class="title title-link">Search for:</h2>&nbsp;<b>{{ request()->q }}</b>
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
                        @foreach($posts as $p)
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
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="{{ route('preview', ['slug' => $p->slug]) }}">{{ Str::limit($p->title, 20) }}</a>
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
                        @endforeach
                    </div>
                    <div class="swiper-pagination">
                        {{ $posts->links() }}
                    </div>
                </div>
    </div>
    
@stop