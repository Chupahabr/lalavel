window.addEventListener('click', (e) => {
    const targetElement = e.target;

    if (targetElement.closest('.menu__arrow')) {
        const label = targetElement.parentElement;
        const item = label.parentElement;
        const sublist = label.nextElementSibling;
        const arrow = label.querySelector('.menu__arrow');

        if (item.classList.contains('menu__item_active')) {
            item.style.height = 30 + 'px';
        } else {
            const countItem = sublist.childElementCount;
            const itemHeight = countItem * 30 + 80;
            item.style.height = itemHeight + 'px';
        }
        item.classList.toggle('menu__item_active');
        arrow.classList.toggle('menu__arrow_active');

    }
});