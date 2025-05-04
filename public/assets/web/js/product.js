document.addEventListener('DOMContentLoaded', function() {
    const mainImage = document.querySelector('.products-detail .img-fluid');
    const thumbnails = document.querySelectorAll('.products-detail .thumbnail img');

    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', function() {
            mainImage.src = this.src;
            mainImage.alt = this.alt;

            // Add a smooth transition effect
            mainImage.classList.add('fade-in');
            setTimeout(() => {
                mainImage.classList.remove('fade-in');
            }, 500);
        });
    });
});
