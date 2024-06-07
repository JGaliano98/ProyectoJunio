document.addEventListener('DOMContentLoaded', function() {
    const titles = document.querySelectorAll('.card-title');

    titles.forEach(title => {
        let fontSize = parseInt(window.getComputedStyle(title).fontSize);
        const originalFontSize = fontSize;

        while (title.scrollWidth > title.clientWidth && fontSize > 10) {
            fontSize--;
            title.style.fontSize = fontSize + 'px';
        }

        // Si el texto se sale del cuadro incluso después de ajustar el tamaño de la fuente, añadimos elipsis
        if (title.scrollWidth > title.clientWidth) {
            title.style.whiteSpace = 'nowrap';
            title.style.overflow = 'hidden';
            title.style.textOverflow = 'ellipsis';
        }
    });
});
