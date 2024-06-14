document.addEventListener("DOMContentLoaded", function () {
    const hoverImages = {
        'Carousel Layout': 'https://picsum.photos/500/200?1',
        'Services Layout': 'https://picsum.photos/500/200?2',
        'Image and Editor Layout': 'https://picsum.photos/500/200?3'
    };

    const listItems = document.querySelectorAll('.cf-complex__inserter-item');

    listItems.forEach(function (item) {

        const listItemText = item.textContent.trim();

        const hoverImage = document.createElement('img');
        hoverImage.classList.add('__hover-image');
        hoverImage.src = hoverImages[listItemText];
        hoverImage.style.display = 'none';
        document.body.appendChild(hoverImage);

        item.addEventListener('mouseenter', function () {
            const rect = item.getBoundingClientRect();
            hoverImage.style.top = rect.top + window.scrollY + 'px';
            hoverImage.style.left = rect.left + 'px';
            hoverImage.style.display = 'block';
        });

        item.addEventListener('mouseleave', function () {
            hoverImage.style.display = 'none';
        });
    });
});
