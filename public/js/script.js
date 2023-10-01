//Carousel Animation

document.addEventListener('DOMContentLoaded', function () {
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    const carousel = document.querySelector('.carousel');
    const images = carousel.querySelectorAll('.carousel-img');
    const numImagesPerSlide = 7; // Nombre d'images à afficher par diapositive
    const numTotalImages = images.length;
    let startIndex = 0; // Indice de départ pour chaque diapositive

    function showImages(startIndex) {
        images.forEach((image, i) => {
            if (i >= startIndex && i < startIndex + numImagesPerSlide) {
                image.style.display = 'block';
            } else {
                image.style.display = 'none';
            }
        });
    }

    function showNextImage() {
        startIndex = (startIndex + 1) % (numTotalImages - numImagesPerSlide + 1);
        carousel.classList.add('carousel-transition'); // Ajoute la classe de transition
        showImages(startIndex);
    }

    function showPrevImage() {
        startIndex = (startIndex - 1 + numTotalImages) % (numTotalImages - numImagesPerSlide + 1);
        carousel.classList.add('carousel-transition'); // Ajoute la classe de transition
        showImages(startIndex);
    }

    carousel.addEventListener('transitionend', () => {
        carousel.classList.remove('carousel-transition');
    });


    showImages(startIndex);


    prevButton.addEventListener('click', showPrevImage);
    nextButton.addEventListener('click', showNextImage);
});

// Planning
