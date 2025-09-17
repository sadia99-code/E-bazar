// Star rating functionality
document.addEventListener('DOMContentLoaded', function() {
    // Function to update star ratings
    function updateStarRatings() {
        const ratingContainers = document.querySelectorAll('.rating-stars');
        
        ratingContainers.forEach(container => {
            const rating = parseFloat(container.getAttribute('data-rating'));
            const stars = container.querySelectorAll('.star');
            
            stars.forEach((star, index) => {
                const starValue = index + 1;
                
                // Remove previous classes
                star.classList.remove('active', 'half');
                
                if (starValue <= Math.floor(rating)) {
                    // Full star
                    star.classList.add('active');
                } else if (starValue === Math.ceil(rating) && rating % 1 !== 0) {
                    // Half star
                    star.classList.add('half');
                }
            });
        });
    }
    
    // Initial update
    updateStarRatings();
});

// Add CSS for star styling
const style = document.createElement('style');
style.textContent = `
    .rating-stars {
        display: inline-block;
        font-size: 18px;
        unicode-bidi: bidi-override;
        direction: ltr;
    }
    .rating-stars .star {
        color: #ddd;
        display: inline-block;
        position: relative;
        width: 1em;
    }
    .rating-stars .star.active {
        color: #ffc107;
    }
    .rating-stars .star.half:before {
        color: #ffc107;
        content: '★';
        position: absolute;
        left: 0;
        width: 50%;
        overflow: hidden;
    }
`;
document.head.appendChild(style);
