document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.querySelector('form.search-bar input[name="q"]');
    if (!searchInput) return;

    // Create dropdown container
    const dropdown = document.createElement('div');
    dropdown.classList.add('dynamic-search-dropdown');
    dropdown.style.position = 'absolute';
    dropdown.style.backgroundColor = '#fff';
    dropdown.style.border = '1px solid #ccc';
    dropdown.style.width = searchInput.offsetWidth + 'px';
    dropdown.style.maxHeight = '300px';
    dropdown.style.overflowY = 'auto';
    dropdown.style.zIndex = '1000';
    dropdown.style.display = 'none';
    dropdown.style.transition = 'all 0.3s ease';

    // Position dropdown below the input
    const rect = searchInput.getBoundingClientRect();
    dropdown.style.top = (searchInput.offsetTop + searchInput.offsetHeight) + 'px';
    dropdown.style.left = searchInput.offsetLeft + 'px';

    // Append dropdown to the form
    searchInput.parentNode.style.position = 'relative';
    searchInput.parentNode.appendChild(dropdown);

    let debounceTimeout = null;

    function slideDown(element) {
        element.style.display = 'block';
        element.style.height = '0px';
        let height = element.scrollHeight;
        element.style.height = height + 'px';
    }

    function slideUp(element) {
        element.style.height = '0px';
        setTimeout(() => {
            element.style.display = 'none';
        }, 300);
    }

    function clearDropdown() {
        dropdown.innerHTML = '';
        slideUp(dropdown);
    }

    searchInput.addEventListener('input', function () {
        const query = this.value.trim();

        if (debounceTimeout) clearTimeout(debounceTimeout);

        if (query.length < 3) {
            clearDropdown();
            return;
        }

        debounceTimeout = setTimeout(() => {
            fetch(`/search?q=${encodeURIComponent(query)}`, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
                .then(response => response.json())
                .then(data => {
                    dropdown.innerHTML = '';
                    if (data.length === 0) {
                        clearDropdown();
                        return;
                    }

                    data.forEach(product => {
                        const item = document.createElement('a');
                        item.href = `/product/${product.slug}`;
                        item.textContent = product.name + ' - $' + product.price;
                        item.style.display = 'block';
                        item.style.padding = '8px 12px';
                        item.style.borderBottom = '1px solid #eee';
                        item.style.color = '#333';
                        item.style.textDecoration = 'none';

                        item.addEventListener('mouseenter', () => {
                            item.style.backgroundColor = '#f8f9fa';
                        });
                        item.addEventListener('mouseleave', () => {
                            item.style.backgroundColor = '#fff';
                        });

                        dropdown.appendChild(item);
                    });

                    slideDown(dropdown);
                })
                .catch(() => {
                    clearDropdown();
                });
        }, 300);
    });

    // Hide dropdown when clicking outside
    document.addEventListener('click', function (e) {
        if (!searchInput.parentNode.contains(e.target)) {
            clearDropdown();
        }
    });
});
