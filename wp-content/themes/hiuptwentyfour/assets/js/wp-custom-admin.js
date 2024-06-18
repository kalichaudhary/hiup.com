document.addEventListener("DOMContentLoaded", function () {
    const hoverImages = {
        'Carousel Layout': './../wp-content/themes/hiuptwentyfour/assets/layouts/carousel-layout.webp',
        'Services Layout': './../wp-content/themes/hiuptwentyfour/assets/layouts/service-layout.webp',
        'Image and Editor Layout': './../wp-content/themes/hiuptwentyfour/assets/layouts/image_editor-layout.webp',
        'Preamble and Video Layout': './../wp-content/themes/hiuptwentyfour/assets/layouts/preamble_video-layout.webp',
        'Testimonials Layout': './../wp-content/themes/hiuptwentyfour/assets/layouts/testimonials-layout.webp',
        'Counters Layout': './../wp-content/themes/hiuptwentyfour/assets/layouts/counters_layout.webp',
        'Short Intro w/Gallery Layout': './../wp-content/themes/hiuptwentyfour/assets/layouts/news-layout.webp',
        'Posts Feed Layout': './../wp-content/themes/hiuptwentyfour/assets/layouts/blog-layout.webp'
    };

    const listItems = document.querySelectorAll('.cf-complex__inserter-item');

    listItems.forEach(function (item) {
        const listItemText = item.textContent.trim();

        const hoverImage = document.createElement('img');
        hoverImage.classList.add('__hover-image');
        hoverImage.src = hoverImages[listItemText];
        hoverImage.style.display = 'none';
        document.body.appendChild(hoverImage);
        hoverImage.style.width = '396px';
        hoverImage.style.height = 'auto';

        let imageHiddenByClick = false;

        item.addEventListener('mouseenter', function () {
            if (!imageHiddenByClick) {
                const rect = item.getBoundingClientRect();
                // hoverImage.style.top = rect.top + window.scrollY + 'px';
                hoverImage.style.top = rect.x + window.scrollY + 'px';
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

        // hoverImage.addEventListener('mouseover', function () {
        //     imageHiddenByClick = true;
        //     hoverImage.style.display = 'block';
        //     item.dispatchEvent(new Event('mouseenter'));
        // });
    });
});
