document.addEventListener("DOMContentLoaded", function () {
    const hoverImages = {
        'Carousel Layout': './../wp-content/themes/hiuptwentyfour/assets/layouts/carousel-layout.png',
        'Services Layout': 'https://picsum.photos/500/200?2',
        'Image and Editor Layout': 'https://picsum.photos/500/200?3',
        'Preamble and Video Layout': 'https://picsum.photos/500/200?3',
        'Testimonials Layout': 'https://picsum.photos/500/200?3',
        'Counters Layout': 'https://picsum.photos/500/200?3',
        'Short Intro w/Gallery Layout': 'https://picsum.photos/500/200?3',
        'Posts Feed Layout': 'https://picsum.photos/500/200?3'
    };

    const listItems = document.querySelectorAll('.cf-complex__inserter-item');

    listItems.forEach(function (item) {
        const listItemText = item.textContent.trim();

        const hoverImage = document.createElement('img');
        hoverImage.classList.add('__hover-image');
        hoverImage.src = hoverImages[listItemText];
        hoverImage.style.display = 'none';
        document.body.appendChild(hoverImage);
        hoverImage.style.width = '1080px';
        hoverImage.style.height = 'auto';

        let imageHiddenByClick = false;

        item.addEventListener('mouseenter', function () {
            if (!imageHiddenByClick) {
                const rect = item.getBoundingClientRect();
                hoverImage.style.top = rect.top + window.scrollY + 'px';
                hoverImage.style.left = rect.left + 'px';
                hoverImage.style.display = 'block';
            }
        });

        item.addEventListener('mouseleave', function () {
            if (!imageHiddenByClick) {
                hoverImage.style.display = 'none';
            }
        });

        item.addEventListener('click', function () {
            imageHiddenByClick = !imageHiddenByClick;
            hoverImage.style.display = 'none';
        });

        hoverImage.addEventListener('click', function () {
            imageHiddenByClick = false;
            hoverImage.style.display = 'none';
        });

        hoverImage.addEventListener('mouseover', function () {
            imageHiddenByClick = true;
            hoverImage.style.display = 'block';
            item.dispatchEvent(new Event('mouseenter'));
        });
    });
});
