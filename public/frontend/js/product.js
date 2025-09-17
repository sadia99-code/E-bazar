$('.bannerSlider').slick({
  arrows: false,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
  asNavFor: '.minibannerSlider'
});

$('.minibannerSlider').slick({
  asNavFor: '.bannerSlider',
  vertical: true,
  verticalSwiping: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  focusOnSelect: true,
  arrows: true,
  prevArrow: `<button class="slick-prev">↑</button>`,
  nextArrow: `<button class="slick-next">↓</button>`,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        vertical: false,
        verticalSwiping: false,
        arrows: false,
        dots: true,
      },
    },
  ],
});

// Quantity increment/decrement
$('.increase-btn').click(function () {
  let qty = parseInt($('.quantity-input').val());
  $('.quantity-input').val(qty + 1);
});
$('.decrease-btn').click(function () {
  let qty = parseInt($('.quantity-input').val());
  if (qty > 1) $('.quantity-input').val(qty - 1);
});
$('.add-to-cart').click(function () {
  let productId = $(this).data('product-id');
  let quantity = $('.quantity-input').val();
  
  $.ajax({
    url: `/cart/add/${productId}`,
    type: 'POST',
    data: {
      _token: $('meta[name="csrf-token"]').attr('content'),
      quantity: quantity
    },
    success: function (response) {
      alert('Product added to cart successfully!');
    },
    error: function (error) {
      alert('Failed to add product to cart.');
    }
  });
});

// Star Rating Functionality
$(document).ready(function() {
    initStarRating();
    
    $('#review-form').on('submit', function(e) {
        e.preventDefault();
        
        const rating = $('#rating-value').val();
        if (rating == 0) {
            alert('Please select a rating before submitting your review.');
            return false;
        }
        
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                if (response.success) {
                    alert('Review submitted successfully!');
                    location.reload();
                } else {
                    alert('Error: ' + response.message);
                }
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    const errors = xhr.responseJSON.errors;
                    let errorMessage = 'Please fix the following errors:\n';
                    for (const field in errors) {
                        errorMessage += errors[field][0] + '\n';
                    }
                    alert(errorMessage);
                } else {
                    alert('An error occurred while submitting your review.');
                }
            }
        });
    });
});

function initStarRating() {
    const stars = $('.my-rating-4 .star');
    let currentRating = 0;
    
    stars.each(function(index) {
        $(this).on('mouseenter', function() {
            resetStars();
            highlightStars(index + 1);
        });
        
        $(this).on('mouseleave', function() {
            resetStars();
            highlightStars(currentRating);
        });
        
        $(this).on('click', function() {
            currentRating = index + 1;
            $('#rating-value').val(currentRating);
            resetStars();
            highlightStars(currentRating);
        });
    });
    
    function resetStars() {
        stars.removeClass('active');
    }
    
    function highlightStars(count) {
        for (let i = 0; i < count; i++) {
            $(stars[i]).addClass('active');
        }
    }
}

// Star Rating Input Preview
document.addEventListener('DOMContentLoaded', function() {
    const ratingInput = document.getElementById('ratingInput');
    const starPreview = document.getElementById('starPreview');
    const ratingValue = document.getElementById('rating-value');

    function renderStars(rating) {
        starPreview.innerHTML = '';
        for (let i = 1; i <= 5; i++) {
            let icon;
            if (rating >= i) {
                icon = '<iconify-icon icon="material-symbols:star" style="color: #ffc107;" width="24" height="24"></iconify-icon>';
            } else if (rating >= i - 0.5) {
                icon = '<iconify-icon icon="material-symbols:star-half" style="color: #ffc107;" width="24" height="24"></iconify-icon>';
            } else {
                icon = '<iconify-icon icon="material-symbols:star-outline" style="color: #e0e0e0;" width="24" height="24"></iconify-icon>';
            }
            starPreview.innerHTML += icon;
        }
    }

    ratingInput.addEventListener('input', function() {
        let rating = parseFloat(this.value) || 0;
        if (rating > 5) rating = 5;
        if (rating < 0) rating = 0;
        renderStars(rating);
        ratingValue.value = rating;
    });

    renderStars(0);
});

