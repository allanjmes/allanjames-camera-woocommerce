document.addEventListener('DOMContentLoaded', () => {
    let count = 0;
    const loadingCountElement = document.getElementById('loading-count');
    const loadingContainer = document.getElementById('loading-container');
    const loadingIntervalDuration = 5;

    const interval = setInterval(() => {
        count++;
        loadingCountElement.textContent = count;
        if (count >= 99) {
            clearInterval(interval);

            if (document.readyState === 'complete') {
                finishLoading();
            } else {
                window.addEventListener('load', finishLoading);
            }
        }
    }, loadingIntervalDuration);

    function finishLoading() {
        loadingCountElement.textContent = 100;
        setTimeout(() => {
            loadingContainer.style.display = 'none';
            document.body.classList.remove('loading');
        }, 500);
    }
});