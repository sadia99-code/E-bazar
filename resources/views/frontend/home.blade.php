@extends('layouts.frontendlayout')

@section('content')

<!-- Hero Section -->
<section class="banner">
                <div class="content">
                    <div class="container">
                        <div class="banner-text" style="margin-bottom: 100px">
                            <h5>YOUR</h5>
                            <h2 class="title">ONE STOP SHOP</h2>
                            <p class="description">E-Bazar is your one-stop shop for all your grocery needs. We have<br> a wide selection of fresh produce, meats, seafood, dairy, and<br> baked goods, all at affordable prices. Plus, we offer free delivery. </p>
                        </div>
                        <div class="main-btn text-end">
                            <a href="{{ route('frontend.shop') }}" class="cus-btn dark">Explore Products</a>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('frontend/images/object-1.png') }}" alt="" class="object">
            </section>

            {{-- category section --}}
            <section class="category pt-96 pb-48">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="category-box">
                                <div class="img-block">
                                    <img src="{{ asset('frontend/images/c-1.png') }}" alt="">
                                </div>
                                <div class="content-box">
                                    <div class="discount">
                                        <h2>20%</h2>
                                        <span>OFF</span>
                                    </div>
                                    <h4>Pine-Apple</h4>
                                    <a href="{{ route('frontend.shop') }}" class="cus-btn dark">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="category-box">
                                <div class="img-block">
                                    <img src="{{ asset('frontend/images/c-2.png') }}" alt="">
                                    <div class="content-box">
                                    <div class="discount">
                                        <h2>10%</h2>
                                        <span>OFF</span>
                                    </div>
                                    <h4>White Bread</h4>
                                    <a href="{{ route('frontend.product') }}" class="cus-btn dark">Shop Now</a>
                                </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- all products --}}
            <!-- Products Section -->
                    <section class="Products pt-48 pb-96">
                <div class="container">
                    <div class="heading text-center">
                        <h2>All Products</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <ul class="nav nav-tabs title-btn justify-content-around" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#all-products" type="button" role="tab">All Products</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#dairy" type="button" role="tab">Dairy</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#food_drink" type="button" role="tab">Food &amp; Drinks</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#fruits" type="button" role="tab">Fruits</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#vegetables" type="button" role="tab">Vegetables</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="all-products" class="tab-pane fade show active">
                        <div class="row">
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product-card">
                                        <div class="showcase-box">
                                            <img src="{{ asset('frontend/images/p-1.png') }}" alt="">
                                            <span class="price">$58</span>
                                            <div class="overlay">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('frontend.product') }}"><i class="far fa-eye"></i></a>
                                                    <a href=""><i class="far fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('frontend.product') }}" class="title">Fresh Apples</a>
                                        <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product-card">
                                        <div class="showcase-box">
                                            <img src="{{ asset('frontend/images/p-2.png') }}" alt="">
                                            <span class="price">$35</span>
                                            <div class="overlay">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('frontend.product') }}"><i class="far fa-eye"></i></a>
                                                    <a href=""><i class="far fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('frontend.product') }}" class="title">Tomato Sauce</a>
                                        <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product-card">
                                        <div class="showcase-box">
                                            <img src="{{ asset('frontend/images/p-3.png') }}" alt="">
                                            <span class="price">$55</span>
                                            <div class="overlay">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('frontend.product') }}"><i class="far fa-eye"></i></a>
                                                    <a href=""><i class="far fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('frontend.product') }}" class="title">Red Paprika</a>
                                        <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product-card">
                                        <div class="showcase-box">
                                            <img src="{{ asset('frontend/images/p-4.png') }}" alt="">
                                            <span class="price">$69</span>
                                            <div class="overlay">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('frontend.product') }}"><i class="far fa-eye"></i></a>
                                                    <a href=""><i class="far fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('frontend.product') }}" class="title">Honey Jar</a>
                                        <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product-card">
                                        <div class="showcase-box">
                                            <img src="{{ asset('frontend/images/p-5.png') }}" alt="">
                                            <span class="price">$99</span>
                                            <div class="overlay">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('frontend.product') }}"><i class="far fa-eye"></i></a>
                                                    <a href=""><i class="far fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('frontend.product') }}" class="title">Strawberries</a>
                                        <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                                    </div>
                                </div>
                                
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product-card">
                                        <div class="showcase-box">
                                            <img src="{{ asset('frontend/images/p-6.png') }}" alt="">
                                            <span class="price">$66</span>
                                            <div class="overlay">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('frontend.product') }}"><i class="far fa-eye"></i></a>
                                                    <a href=""><i class="far fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('frontend.product') }}" class="title">Mangoes</a>
                                        <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product-card">
                                        <div class="showcase-box">
                                            <img src="{{ asset('frontend/images/p-7.png') }}" alt="">
                                            <span class="price">$77</span>
                                            <div class="overlay">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('frontend.product') }}"><i class="far fa-eye"></i></a>
                                                    <a href=""><i class="far fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('frontend.product') }}" class="title">Pomegranate</a>
                                        <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product-card">
                                        <div class="showcase-box">
                                            <img src="{{ asset('frontend/images/p-8.png') }}" alt="">
                                            <span class="price">$33</span>
                                            <div class="overlay">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('frontend.product') }}"><i class="far fa-eye"></i></a>
                                                    <a href=""><i class="far fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('frontend.product') }}" class="title">Pea Jar Pickle</a>
                                        <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('frontend.shop') }}" class="cus-btn bordered">Discover More</a>
                    </div>
                </div>
            </section>


            {{-- inner banner --}}
            <section class="inner-banner">
                <div class="container">
                    <div class="content pt-48">
                        <h5>Dry Fruits</h5>
                        <h2>BACK IN STOCK</h2>
                         <ul class="timer countdown list-unstyled"> 
                            <li>106<small>d</small></li>                
                            <li>03<small>h</small></li>                
                            <li>08<small>m</small></li>                
                            <li>15<small>s</small></li>
                        </ul> 
                    </div>
                </div>
            </section>
            {{-- featured products --}}
            <section class="related-products-section pt-48 pb-48">
                <div class="container">
                    <div class="heading">
                        <h2>Featured Products</h2>
                    </div>
                    <div class="related-products-grid product-slider">
                        <div class="product-card slide-margin d-flex flex-column h-100">
                            <div class="showcase-box">
                                <img src="{{ asset('frontend/images/p-14.png') }}" alt="">
                                <span class="price">$58</span>
                                <div class="overlay">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{ route('frontend.product') }}" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="far fa-eye"></i></a>
                                        <a href=""><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('frontend.product') }}" class="title">Fresh Apples</a>
                            <a href="javascript:;" class="cus-btn dark cart-button mt-auto">Add to Cart</a>
                        </div>
                        <div class="product-card slide-margin d-flex flex-column h-100">
                            <div class="showcase-box">
                                <img src="{{ asset('frontend/images/p-15.png') }}" alt="">
                                <span class="price">$35</span>
                                <div class="overlay">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{ route('frontend.product') }}" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="far fa-eye"></i></a>
                                        <a href=""><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('frontend.product') }}" class="title">Tomato Sauce</a>
                            <a href="javascript:;" class="cus-btn dark cart-button mt-auto">Add to Cart</a>
                        </div>
                        <div class="product-card slide-margin d-flex flex-column h-100">
                            <div class="showcase-box">
                                <img src="{{ asset('frontend/images/p-9.png') }}" alt="">
                                <span class="price">$55</span>
                                <div class="overlay">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{ route('frontend.product') }}" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="far fa-eye"></i></a>
                                        <a href=""><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('frontend.product') }}" class="title">Red Paprika</a>
                            <a href="javascript:;" class="cus-btn dark cart-button mt-auto">Add to Cart</a>
                        </div>
                        <div class="product-card slide-margin d-flex flex-column h-100">
                            <div class="showcase-box">
                                <img src="{{ asset('frontend/images/p-10.png') }}" alt="">
                                <span class="price">$69</span>
                                <div class="overlay">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{ route('frontend.product') }}" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="far fa-eye"></i></a>
                                        <a href=""><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('frontend.product') }}" class="title">Honey Jar</a>
                            <a href="javascript:;" class="cus-btn dark cart-button mt-auto">Add to Cart</a>
                        </div>
                        <div class="product-card slide-margin d-flex flex-column h-100">
                            <div class="showcase-box">
                                <img src="{{ asset('frontend/images/p-11.png') }}" alt="">
                                <span class="price">$99</span>
                                <div class="overlay">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{ route('frontend.product') }}" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="far fa-eye"></i></a>
                                        <a href=""><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('frontend.product') }}" class="title">Strawberries</a>
                            <a href="javascript:;" class="cus-btn dark cart-button mt-auto">Add to Cart</a>
                        </div>
                        <div class="product-card slide-margin d-flex flex-column h-100">
                            <div class="showcase-box">
                                <img src="{{ asset('frontend/images/p-12.png') }}" alt="">
                                <span class="price">$66</span>
                                <div class="overlay">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{ route('frontend.product') }}" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="far fa-eye"></i></a>
                                        <a href=""><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('frontend.product') }}" class="title">Mangoes</a>
                            <a href="javascript:;" class="cus-btn dark cart-button mt-auto">Add to Cart</a>
                        </div>
                        <div class="product-card slide-margin d-flex flex-column h-100">
                            <div class="showcase-box">
                                <img src="{{ asset('frontend/images/p-13.png') }}" alt="">
                                <span class="price">$77</span>
                                <div class="overlay">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{ route('frontend.product') }}" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="far fa-eye"></i></a>
                                        <a href=""><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('frontend.product') }}" class="title">Pomegranate</a>
                            <a href="javascript:;" class="cus-btn dark cart-button mt-auto">Add to Cart</a>
                        </div>
                        <div class="product-card slide-margin d-flex flex-column h-100">
                            <div class="showcase-box">
                                <img src="{{ asset('frontend/images/p-4.png') }}" alt="">
                                <span class="price">$33</span>
                                <div class="overlay">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{ route('frontend.product') }}" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="far fa-eye"></i></a>
                                        <a href=""><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('frontend.product') }}" class="title">Pea Jar Pickle</a>
                            <a href="javascript:;" class="cus-btn dark cart-button mt-auto">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </section>

            {{-- testimonials --}}
                        <section class="testimonials pt-48 pb-48">
                        <div class="container">
                            <div class="heading text-center">
                            <h2>Client’s Reviews</h2>
                            </div>

                            <div class="testimonial-slider">
                            <!-- Testimonial 1 -->
                            <div class="testimonial-box">
                                <div class="upper-row">
                                <img src="{{ asset('frontend/images/Image.png') }}" alt="">
                                <h6 class="name">Richard Johnson</h6>
                                </div>
                                <p class="review">
                                Cobbler's shoes are the epitome of style and elegance. I receive compliments every time I wear them. The craftsmanship is outstanding, and the fit is perfect.
                                </p>
                            </div>

                            <!-- Testimonial 2 -->
                            <div class="testimonial-box">
                                <div class="upper-row">
                                <img src="{{ asset('frontend/images/Image-1.png') }}" alt="">
                                <h6 class="name">Susan Hernandez</h6>
                                </div>
                                <p class="review">
                                I cannot express how impressed I am with Cobbler's customer service. They went above and beyond to ensure I got the right pair of shoes that suited my style.
                                </p>
                            </div>

                            <!-- Testimonial 3 -->
                            <div class="testimonial-box">
                                <div class="upper-row">
                                <img src="{{ asset('frontend/images/Image-2.png') }}" alt="">
                                <h6 class="name">Richard Johnson</h6>
                                </div>
                                <p class="review">
                                Cobbler's shoes are a work of art. Each pair is meticulously crafted with precision and passion. I am constantly impressed by the unique designs and the level of comfort.
                                </p>
                            </div>

                            <!-- Testimonial 4 -->
                            <div class="testimonial-box">
                                <div class="upper-row">
                                <img src="{{ asset('frontend/images/Image-1.png') }}" alt="">
                                <h6 class="name">Susan Hernandez</h6>
                                </div>
                                <p class="review">
                                I cannot express how impressed I am with Cobbler's customer service. They went above and beyond to ensure I got the right pair of shoes that suited my style.
                                </p>
                            </div>
                            </div>
                        </div>
                        </section>

            {{-- blogs --}}
            <section class="blog-section my-80 mb-80" style="margin: 100px 0;">
                <div class="container">
                    <div class="row row-gap-4">
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="blog-card">
                                <div class="image-block mb-24">
                                    <img src="{{ asset('frontend/images/blog-1.png') }}" alt="">
                                </div>
                                <div class="text-block"  style="margin-top: 25px">
                                    <div class="mb-16 ab-blog">
                                        <p><i class="far fa-calendar-days"></i>22 Dec, 2024</p>
                                        <p><i class="far fa-user"></i>Malisa John</p>
                                    </div>
                                    <hr class="mb-16">
                                    <a href="blog-detail.html" class="h5 fw-600 mb-8">Navigating Cities and Urban Landscapes</a>
                                    <p class="mb-20">Lorem ipsum dolor sit amet consectetur. Feugiat sit eleifend tortor lectus adipiscing aliquam.</p>
                                    <a href="blog-detail.html" class="cus-btn sec small-pad">Read More<span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="blog-card">
                                <div class="image-block mb-24">
                                    <img src="{{ asset('frontend/images/blog-2.png') }}" alt="">
                                </div>
                                <div class="text-block"  style="margin-top: 25px">
                                    <div class="mb-16 ab-blog">
                                        <p><i class="far fa-calendar-days"></i>22 Dec, 2024</p>
                                        <p><i class="far fa-user"></i>Malisa John</p>
                                    </div>
                                    <hr class="mb-16">
                                    <a href="blog-detail.html" class="h5 fw-600 mb-8">Traveling Responsibly and Sustainably</a>
                                    <p class="mb-20">Lorem ipsum dolor sit amet consectetur. Feugiat sit eleifend tortor lectus adipiscing aliquam.</p>
                                    <a href="blog-detail.html" class="cus-btn sec small-pad">Read More<span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="blog-card">
                                <div class="image-block mb-24">
                                    <img src="{{ asset('frontend/images/blog-3.png') }}" alt="">
                                </div>
                                <div class="text-block"  style="margin-top: 25px">
                                    <div class="mb-16 ab-blog">
                                        <p><i class="far fa-calendar-days"  ></i>22 Dec, 2024</p>
                                        <p><i class="far fa-user"></i>Malisa John</p>
                                    </div>
                                    <hr class="mb-16">
                                    <a href="blog-detail.html" class="h5 fw-600 mb-8">Cross-Cultural Encounters and Insights</a>
                                    <p class="mb-20">Lorem ipsum dolor sit amet consectetur. Feugiat sit eleifend tortor lectus adipiscing aliquam.</p>
                                    <a href="blog-detail.html" class="cus-btn sec small-pad">Read More<span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="blog-card">
                                <div class="image-block mb-24">
                                    <img src="{{ asset('frontend/images/blog-4.png') }}" alt="">
                                </div>
                                <div class="text-block"  style="margin-top: 25px">
                                    <div class="mb-16 ab-blog">
                                        <p><i class="far fa-calendar-days"></i>22 Dec, 2024</p>
                                        <p><i class="far fa-user"></i>Malisa John</p>
                                    </div>
                                    <hr class="mb-16">
                                    <a href="blog-detail.html" class="h5 fw-600 mb-8">Wings of Adventure: Exploring the World by Air</a>
                                    <p class="mb-20">Lorem ipsum dolor sit amet consectetur. Feugiat sit eleifend tortor lectus adipiscing aliquam.</p>
                                    <a href="blog-detail.html" class="cus-btn sec small-pad">Read More<span></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Pagination Start -->
                        <ul class="pagination text-center">
                            <li><a class="prev" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none"><path d="M16.2068 29.1201C16.2068 25.3701 12.7068 20.3701 8.70679 20.3701M8.70679 20.3701C10.9985 20.3701 16.2068 19.1201 16.2068 11.6201M8.70679 20.3701H32.4568" stroke-width="2.5"></path></svg></a></li>
                            <li><a class="active" href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">09</a></li>
                            <li><a class="next" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none"><path d="M24.7932 29.1201C24.7932 25.3701 28.2932 20.3701 32.2932 20.3701M32.2932 20.3701C30.0015 20.3701 24.7932 19.1201 24.7932 11.6201M32.2932 20.3701H8.54321" stroke-width="2.5"></path></svg></a></li>
                        </ul>
                    </div>
                </div>
            </section>

@endsection
