<header class="site-header">
  <div class="container header-container">
    <div class="logo mb-2">
      <a href="{{ url('/') }}"><img src="{{ asset('frontend/images/logo.png') }}" alt="eBazar Logo"></a>
    </div>

<nav class="navbar mt-2">
  <ul>
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="has-submenu">
      <a href="#">Categories</a>
      <ul class="submenu">
        <li>
          <a href="{{ url('/category/fruit') }}">
            <img src="{{ asset('frontend/images/p-1.png') }}" alt="Fruit Icon" class="submenu-icon" />
            Fruit
          </a>
        </li>
        <li>
          <a href="{{ url('/category/vegetables') }}">
            <img src="{{ asset('frontend/images/p-2.png') }}" alt="Vegetables Icon" class="submenu-icon" />
            Vegetables
          </a>
        </li>
        <li>
          <a href="{{ url('/category/dairy') }}">
            <img src="{{ asset('frontend/images/p-3.png') }}" alt="Dairy Icon" class="submenu-icon" />
            Dairy
          </a>
        </li>
        <li>
          <a href="{{ url('/category/bakery') }}">
            <img src="{{ asset('frontend/images/p-4.png') }}" alt="Bakery Icon" class="submenu-icon" />
            Bakery
          </a>
        </li>
      </ul>
    </li>
    <li><a href="{{ url('/shop') }}">Shop</a></li>
    <li><a href="{{ url('/about') }}">About</a></li>
    <li><a href="{{ url('/contact') }}">Contact</a></li>
  </ul>
</nav>

    <!-- Search form beside nav -->
    <form class="search-form" id="navbar-search-form" action="{{ url('/search') }}" method="GET">
      <input type="text" name="query" placeholder="Search" />
    </form>

    <div class="header-icons">
      <a href="#" id="search-icon"><i class="fas fa-search"></i></a>
      <a href="#" id="wishlist-icon"><i class="fas fa-heart"></i></a>
      <a href="#" id="cart-icon"><i class="fas fa-shopping-cart"></i></a>
    </div>
  </div>
</header>
