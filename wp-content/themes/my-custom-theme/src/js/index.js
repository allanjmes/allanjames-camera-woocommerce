import '../css/index.css';
import '../../style.css';

// import './page-loader';
import './toggle-theme';
import './close-sidebar-drawer';

// Cart Quantity
document.addEventListener('DOMContentLoaded', function () {
    // Initialize minus buttons on page load
    document.querySelectorAll('.qty-minus').forEach(minusBtn => {
        const input = minusBtn.nextElementSibling;
        updateMinusButtonState(input);
    });

    // Handle plus button click
    document.addEventListener('click', function (e) {
        if (e.target.matches('.qty-plus')) {
            const input = e.target.previousElementSibling;
            const max = input.max ? parseFloat(input.max) : Infinity;
            const step = input.step ? parseFloat(input.step) : 1;
            let value = parseFloat(input.value) || 0;

            if (value + step <= max) {
                input.value = value + step;
                input.dispatchEvent(new Event('change'));
            }

            updateMinusButtonState(input);
            updateCartButtonState();
        }
    });

    // Handle minus button click
    document.addEventListener('click', function (e) {
        if (e.target.matches('.qty-minus')) {
            const input = e.target.nextElementSibling;
            const min = 1;
            const step = input.step ? parseFloat(input.step) : 1;
            let value = parseFloat(input.value) || 1;

            if (value - step >= min) {
                input.value = value - step;
                input.dispatchEvent(new Event('change'));
            }

            updateMinusButtonState(input);
            updateCartButtonState();
        }
    });

    // Disable or enable the minus button based on input value
    function updateMinusButtonState(input) {
        const minusBtn = input.previousElementSibling;
        const value = parseFloat(input.value) || 1;

        if (minusBtn && minusBtn.classList.contains('qty-minus')) {
            minusBtn.disabled = value <= 1;
        }
    }

    // Enable update-cart button and refresh all minus buttons
    function updateCartButtonState() {
        const updateCartBtn = document.querySelector('.update-cart-btn');
        if (updateCartBtn) {
            updateCartBtn.disabled = false;
        }
    }
});


