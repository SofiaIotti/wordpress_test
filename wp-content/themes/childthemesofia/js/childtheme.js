window.addEventListener('DOMContentLoaded', function () {
    const titoli = document.getElementsByTagName('h1');
    const paragrafi = this.document.getElementsByTagName('p');
    if (titoli.length > 0) {
        const titolo = titoli[0];
        titolo.style.transition = 'transform 1s ease';
        titolo.style.transformOrigin = 'center';
        titolo.style.transform = 'rotate(360deg)';
    }
});