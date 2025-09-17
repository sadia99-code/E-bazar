document.addEventListener('DOMContentLoaded', function () {
    const wishlistIcon = document.getElementById('wishlist-icon');
    const cartIcon = document.getElementById('cart-icon');

    // Create sidebar element
    const sidebar = document.createElement('aside');
    sidebar.id = 'sidebar-wishlist';

   // Sidebar content
sidebar.innerHTML = `
        <a class="close-button close-popup"><span class="close-icon">X</span></a>
        <div class="mb-32">
            <h3 class="h-39 color-dark-2 fw-400 font-sec mb-32">
                Wishlist Items <span class="h-27 wishlist-count">(2)</span>
            </h3>
            <div class="vr-line"></div>
        </div>
        <ul class="product-list">
            <li class="product-item mb-24">
                <a href="javascript:;">
                    <span class="item-image">
                        <img src="/frontend/images/c-1.png" alt="Product Photo">
                    </span>
                </a>
                <div class="product-text">
                    <a href="javascript:;">
                        <h5 class="h-21 font-sec fw-500 color-dark-2 mb-8">Timeless Trellis Lace Dress</h5>
                    </a>
                    <h6 class="h-21 font-sec fw-500 color-dark-2 mb-12">1 x $140.99</h6>
                    <a href="#remove" class="remove-item h-16 fw-500 font-sec color-primary">REMOVE</a>
                </div>
            </li>
            <li class="vr-line mb-24"></li>
            <li class="product-item">
                <a href="javascript:;">
                    <span class="item-image">
                        <img src="/frontend/images/c-2.png" alt="Product Photo">
                    </span>
                </a>
                <div class="product-text">
                    <a href="javascript:;">
                        <h5 class="h-21 font-sec fw-500 color-dark-2 mb-8">Ethereal Elegance Cocktail Dress</h5>
                    </a>
                    <h6 class="h-21 font-sec fw-500 color-dark-2 mb-12">1 x $140.99</h6>
                    <a href="#remove" class="remove-item h-16 fw-500 font-sec color-primary">REMOVE</a>
                </div>
            </li>
        </ul>
        <div class="vr-line mb-24"></div>
        <div class="action-buttons">
            <a href="/cart" class="cus-btn">VIEW CART</a>
            <a href="/checkout" class="cus-btn active-btn">CHECKOUT</a>
        </div>
`;


    document.body.appendChild(sidebar);

    // Create curtain element
    const curtain = document.createElement('div');
    curtain.id = 'sidebar-wishlist-curtain';
    curtain.className = 'close-popup';
    document.body.appendChild(curtain);

    // Function to update wishlist count
    function updateWishlistCount() {
        const count = sidebar.querySelectorAll('.product-item').length;
        const countSpan = sidebar.querySelector('.wishlist-count');
        countSpan.textContent = `(${count})`;
    }

    // Add remove functionality
    sidebar.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-item')) {
            e.preventDefault();
            const item = e.target.closest('.product-item');
            const vrLine = item.nextElementSibling;
            if (vrLine && vrLine.classList.contains('vr-line')) {
                vrLine.remove();
            }
            item.remove();
            updateWishlistCount();
        }
    });

    // Show sidebar and curtain
    const closeBtns = sidebar.querySelectorAll('.close-popup');
    closeBtns.forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            sidebar.style.right = '-560px';
            // Also hide the curtain if present
            curtain.style.transform = 'scale(0)';
            curtain.style.zIndex = '-1';
        });
    });

    // Show curtain when sidebar is open
    if (curtain) {
        curtain.addEventListener('click', function (e) {
            e.preventDefault();
            sidebar.style.right = '-560px';
            curtain.style.transform = 'scale(0)';
            curtain.style.zIndex = '-1';
        });
    }

    // Modify wishlistIcon click to show sidebar
    wishlistIcon.addEventListener('click', function (e) {
        e.preventDefault();
        if (sidebar.style.right === '0px') {
            sidebar.style.right = '-560px';
            if (curtain) {
                curtain.style.transform = 'scale(0)';
                curtain.style.zIndex = '-1';
            }
        } else {
            sidebar.style.right = '0';
            if (curtain) {
                curtain.style.transform = 'scale(1)';
                curtain.style.zIndex = '9999';
            }
        }
    });

    // Cart icon redirect to cart page
    cartIcon.addEventListener('click', function (e) {
        window.location.href = '/cart';
    });

    // Add to cart buttons also open wishlist sidebar
    document.querySelectorAll('.cart-button').forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            if (sidebar.style.right === '0px') {
                sidebar.style.right = '-560px';
                if (curtain) {
                    curtain.style.transform = 'scale(0)';
                    curtain.style.zIndex = '-1';
                }
            } else {
                sidebar.style.right = '0';
                if (curtain) {
                    curtain.style.transform = 'scale(1)';
                    curtain.style.zIndex = '9999';
                }
            }
        });
    });

    // Heart icons in product overlay also open wishlist sidebar
    document.querySelectorAll('.overlay a').forEach(link => {
        // Only add event listener if the link contains a heart icon
        if (link.querySelector('.fa-heart')) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                if (sidebar.style.right === '0px') {
                    sidebar.style.right = '-560px';
                    if (curtain) {
                        curtain.style.transform = 'scale(0)';
                        curtain.style.zIndex = '-1';
                    }
                } else {
                    sidebar.style.right = '0';
                    if (curtain) {
                        curtain.style.transform = 'scale(1)';
                        curtain.style.zIndex = '9999';
                    }
                }
            });
        }
    });
});
