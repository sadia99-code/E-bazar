@extends('layouts.frontendlayout')

@section('content')

{{-- page banner --}}
            <section class="page-start-banner" style="margin: 50px 0 100px 0">
                <div class="container">
                    <h2 class="title">Shop</h2>
                </div>
            </section>

{{-- Product Area --}}
<section class="arrivals pt-96 pb-48">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4">
                            <div class="sidebar">
                                <div class="content-block">
                                    <div class="category-filter">
                                <div class="search-form d-flex">
                                <form method="get" action="./shop.html">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                </div>

                                        <h5 class="title">Categories</h5>
                                        <ul class="list-unstyled">
                                            <li><a href="shop.html">All Products</a></li>
                                            <li><a href="shop.html">Fruits</a></li>
                                            <li><a href="shop.html">Food &amp; Drinks</a></li>
                                            <li><a href="shop.html">Dairy</a></li>
                                            <li><a href="shop.html">Vegetables</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content-block">
                                    <div class="popular-products">
                                        <h5 class="title">Popular Products</h5>
                                        <a href="{{ route('frontend.product') }}" class="product">
                                            <img src="{{ asset('frontend/images/apple.png') }}" alt="">
                                            <div class="detail">
                                                <h6>Fresh Apples</h6>
                                                <span>$15</span>
                                            </div>
                                        </a>
                                        <a href="{{ route('frontend.product') }}" class="product">
                                            <img src="{{ asset('frontend/images/p-2.png') }}" alt="">
                                            <div class="detail">
                                                <h6>Honey Jar</h6>
                                                <span>$60</span>
                                            </div>
                                        </a>
                                        <a href="{{ route('frontend.product') }}" class="product">
                                            <img src="{{ asset('frontend/images/p-5.png') }}" alt="">
                                            <div class="detail">
                                                <h6>Strawberries</h6>
                                                <span>$50</span>
                                            </div>
                                        </a>
                                        <a href="{{ route('frontend.product') }}" class="product">
                                            <img src="{{ asset('frontend/images/p-2.png') }}" alt="">
                                            <div class="detail">
                                                <h6>Tomato Sauce</h6>
                                                <span>$42</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="content-block filter-block">
                                    <h5 class="title">Product Filter Groups</h5>
                                    <div class="filter-group">
                                        <h6>Filter by Category</h6>
                                        <ul class="filter-category">
                                            <li>
                                                <input type="radio" id="cat-clothing" name="filter-category" value="clothing">
                                                <label for="cat-clothing">Clothing</label>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="cat-accessories" name="filter-category" value="accessories">
                                                        <label for="cat-accessories">Accessories</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="cat-hoodies" name="filter-category" value="hoodies">
                                                        <label for="cat-hoodies">Hoodies</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="cat-tshirts" name="filter-category" value="tshirts">
                                                        <label for="cat-tshirts">Tshirts</label>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <input type="radio" id="cat-decor" name="filter-category" value="decor">
                                                <label for="cat-decor">Decor</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="cat-music" name="filter-category" value="music">
                                                <label for="cat-music">Music</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="filter-group">
                                        <h6>Filter by Color</h6>
                                        <ul class="filter-color">
                                            <li>
                                                <input type="checkbox" id="color-blue" name="filter-color" value="blue">
                                                <label for="color-blue">Blue</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="color-gray" name="filter-color" value="gray">
                                                <label for="color-gray">Gray</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="color-green" name="filter-color" value="green">
                                                <label for="color-green">Green</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="color-red" name="filter-color" value="red">
                                                <label for="color-red">Red</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="color-yellow" name="filter-color" value="yellow">
                                                <label for="color-yellow">Yellow</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="filter-group">
                                        <h6>Price Range</h6>
                                        <div class="price-range-slider">
<input type="range" min="2" max="90" value="2" class="slider" id="priceRangeMin">
<input type="range" min="2" max="90" value="90" class="slider" id="priceRangeMax">
                                            <div class="price-range-values">
                                                <span>$2</span> — <span>$90</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-buttons">
                                        <button class="btn btn-apply">Apply All</button>
                                        <button class="btn btn-clear">Clear All</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8" style="margin-bottom: 80px">
                            <div class="filter-sort">
                                <div class="results-count">
                                    <h6>Showing 1–9 of 17 results</h6>
                                </div>
                                <div class="sort-dropdown">
                                    <label for="sortSelect">Default sorting</label>
                                    <select id="sortSelect" name="sortSelect">
                                        <option value="default">Default sorting</option>
                                        <option value="latest">Sort by latest</option>
                                        <option value="price-high-low">Sort by price: high to low</option>
                                        <option value="price-low-high">Sort by price: low to high</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-card">
                                        <div class="showcase-box">
                                            <img src="{{ asset('frontend/images/p-1.png') }}" alt="">
                                            <span class="price">$58</span>
                                            <div class="overlay">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('frontend.product') }}"><i class="fas fa-eye"></i></a>
                                                    <a href=""><i class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('frontend.product') }}" class="title">Running Trainers</a>
                                        <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-card">
                                        <div class="showcase-box">
                                            <img src="{{ asset('frontend/images/p-2.png') }}" alt="">
                                            <span class="price">$35</span>
                                            <div class="overlay">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('frontend.product') }}"><i class="fas fa-eye"></i></a>
                                                    <a href=""><i class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('frontend.product') }}" class="title">Classic Timberland</a>
                                        <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-card">
                                        <div class="showcase-box">
                                            <img src="{{ asset('frontend/images/p-3.png') }}" alt="">
                                            <span class="price">$69</span>
                                            <div class="overlay">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('frontend.product') }}"><i class="fas fa-eye"></i></a>
                                                    <a href=""><i class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('frontend.product') }}" class="title">Felted Sneakers</a>
                                        <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-card">
                                        <div class="showcase-box">
                                            <img src="{{ asset('frontend/images/p-4.png') }}" alt="">
                                            <span class="price">$99</span>
                                            <div class="overlay">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('frontend.product') }}"><i class="fas fa-eye"></i></a>
                                                    <a href=""><i class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('frontend.product') }}" class="title">Golden Goose</a>
                                        <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-card">
                                        <div class="showcase-box">
                                            <img src="{{ asset('frontend/images/p-5.png') }}" alt="">
                                            <span class="price">$55</span>
                                            <div class="overlay">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('frontend.product') }}"><i class="fas fa-eye"></i></a>
                                                    <a href=""><i class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('frontend.product') }}" class="title">Felted Sneakers</a>
                                        <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-card">
                                        <div class="showcase-box">
                                            <img src="{{ asset('frontend/images/p-6.png') }}" alt="">
                                            <span class="price">$66</span>
                                            <div class="overlay">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('frontend.product') }}"><i class="fas fa-eye"></i></a>
                                                    <a href=""><i class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('frontend.product') }}" class="title">Running Trainers</a>
                                        <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-card">
                                        <div class="showcase-box">
                                            <img src="{{ asset('frontend/images/p-7.png') }}" alt="">
                                            <span class="price">$77</span>
                                            <div class="overlay">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('frontend.product') }}"><i class="fas fa-eye"></i></a>
                                                    <a href=""><i class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('frontend.product') }}" class="title">Classic Timberland</a>
                                        <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-card">
                                        <div class="showcase-box">
                                            <img src="{{ asset('frontend/images/p-8.png') }}" alt="">
                                            <span class="price">$33</span>
                                            <div class="overlay">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('frontend.product') }}"><i class="fas fa-eye"></i></a>
                                                    <a href=""><i class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('frontend.product') }}" class="title">Felted Sneakers</a>
                                        <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-card">
                                        <div class="showcase-box">
                                            <img src="{{ asset('frontend/images/p-9.png') }}" alt="">
                                            <span class="price">$99</span>
                                            <div class="overlay">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="{{ route('frontend.product') }}"><i class="fas fa-eye"></i></a>
                                                    <a href=""><i class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('frontend.product') }}" class="title">Classic Timberland</a>
                                        <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="pagination-wrape">
                                        <ul class="pagination">
                                            <li class="page-item"><a href="#" class="page-link arrow" aria-label="next"><i class="fas fa-chevron-left"></i></a></li>
                                            <li class="page-item"><a class="page-link current" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a href="#" class="page-link arrow" aria-label="next"><i class="fas fa-chevron-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Category Area --}}
            <section class="category pt-48 pb-48">
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
                                    <a href="product-detail.html" class="cus-btn dark">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="category-box">
                                <div class="img-block">
                                    <img src="{{ asset('frontend/images/c-2.png') }}" alt="">
                                </div>
                                <div class="content-box">
                                    <div class="discount">
                                        <h2>10%</h2>
                                        <span>OFF</span>
                                    </div>
                                    <h4>White Bread</h4>
                                    <a href="product-detail.html" class="cus-btn dark">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


@endsection
