document.querySelectorAll('header button').forEach(function (bouton) {
    if (bouton.dataset.url === window.location.origin + window.location.pathname) {
        bouton.classList.add('actif');
    }

    bouton.addEventListener('click', function () {
        window.location.href = bouton.dataset.url;
    });
});
