<template>
    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-top__wrapper">
                    <div class="header-top__info">Доставка в любой город России всего 700 рублей. По Москве — 500
                        рублей.
                    </div>
                    <div class="header-top__contacts">
                        <div class="header-top__contacts-item">
                            <img src="icon/header/email.png" alt="" class="header-top__contacts-icon">
                            welcome@re-space.ru
                        </div>
                        <div class="header-top__contacts-item">
                            <img src="icon/header/phone.png" alt="" class="header-top__contacts-icon">
                            8 800 350 84 15
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-main">
            <div class="container">
                <div class="header-main__wrapper">
                    <router-link :to="pages.main.href" class="logo">
                        <img class="logo__image" src="icon/header/logo.png" alt="">
                    </router-link>
                    <div class="menu-list">
                        <a href="" class="menu-list__link">Обои</a>
                        <a href="" class="menu-list__link">Плитка</a>
                        <a href="" class="menu-list__link">Краски</a>
                        <a href="" class="menu-list__link">О компании</a>
                        <router-link :to="pages.contact.href" class="menu-list__link">{{pages.contact.name}}</router-link>
                    </div>
                    <div class="search-icon search-icon_header">
                        <svg class="search-icon-svg" width="20" height="20" viewBox="0 0 20 20" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_131)">
                                <path d="M19.8106 18.9119L14.6469 13.8308C15.9991 12.3616 16.8299 10.4187 16.8299 8.28068C16.8293 3.7071 13.0621 0 8.41481 0C3.76746 0 0.000335693 3.7071 0.000335693 8.28068C0.000335693 12.8543 3.76746 16.5614 8.41481 16.5614C10.4228 16.5614 12.2644 15.8668 13.7111 14.7122L18.8948 19.8134C19.1473 20.0622 19.5574 20.0622 19.81 19.8134C20.0631 19.5646 20.0631 19.1607 19.8106 18.9119ZM8.41481 15.2873C4.48265 15.2873 1.29502 12.1504 1.29502 8.28068C1.29502 4.41101 4.48265 1.27403 8.41481 1.27403C12.347 1.27403 15.5346 4.41101 15.5346 8.28068C15.5346 12.1504 12.347 15.2873 8.41481 15.2873Z"
                                      fill="#CA3192"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_1_131">
                                    <rect width="20" height="20" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                    <div class="header-icon">
                        <div class="header-icon__item">
                            <svg class="like-icon" width="21" height="21" viewBox="0 0 21 21" fill="black"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0456 1.80754C13.2938 1.79817 11.6284 2.56753 10.5 3.90751C9.37863 2.55837 7.70864 1.78683 5.9544
                                    1.80754C2.66586 1.80754 0 4.4734 0 7.76193C0 13.3974 9.83543 18.8999 10.2342 19.1126C10.3951 19.2201 10.6049
                                    19.2201 10.7658 19.1126C11.1646 18.8999 21 13.4771 21 7.76193C21 4.4734 18.3341 1.80754 15.0456 1.80754ZM10.5
                                    18.0493C8.95821 17.1455 1.06329 12.3341 1.06329 7.76193C1.06329 5.06066 3.25312 2.87078 5.95445 2.87078C7.60866
                                    2.84905 9.15674 3.68343 10.0481 5.07709C10.2291 5.32666 10.5782 5.38227 10.8277 5.20124C10.8754 5.16664 10.9173
                                    5.12477 10.9519 5.07709C12.4302 2.81623 15.4614 2.18186 17.7223 3.66018C19.1063 4.56519 19.9394 6.10823 19.9367
                                    7.76188C19.9367 12.3872 12.0417 17.1721 10.5 18.0493Z"
                                      fill="black"/>
                            </svg>
                        </div>
                        <div class="header-icon__item basket">
                            <svg class="basket-icon" width="21" height="21" viewBox="0 0 21 21" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1_140)">
                                    <path d="M16.8914 15.9785C15.6332 15.9785 14.6088 17.003 14.6088 18.2611C14.6088 19.5193 15.6332 20.5438 16.8914 20.5438C18.1496 20.5438 19.174 19.5193 19.174 18.2611C19.174 17.0029 18.1495 15.9785 16.8914 15.9785ZM16.8914 19.6307C16.1363 19.6307 15.5218 19.0162 15.5218 18.2611C15.5218 17.506 16.1363 16.8915 16.8914 16.8915C17.6465 16.8915 18.2609 17.506 18.2609 18.2611C18.2609 19.0162 17.6464 19.6307 16.8914 19.6307Z"
                                          fill="#CA3192"/>
                                    <path d="M7.76087 15.9785C6.50271 15.9785 5.47827 17.003 5.47827 18.2611C5.47827 19.5193 6.50271 20.5438 7.76087 20.5438C9.01903 20.5438 10.0435 19.5193 10.0435 18.2612C10.0435 17.003 9.01907 15.9785 7.76087 15.9785ZM7.76087 19.6307C7.00577 19.6307 6.3913 19.0162 6.3913 18.2611C6.3913 17.506 7.00577 16.8915 7.76087 16.8915C8.51597 16.8915 9.13044 17.506 9.13044 18.2611C9.13044 19.0162 8.51597 19.6307 7.76087 19.6307Z"
                                          fill="#CA3192"/>
                                    <path d="M18.7174 14.1522H8.17995C7.09616 14.1522 6.15484 13.3807 5.94208 12.317L3.64305 0.823587C3.60012 0.609935 3.41296 0.456543 3.19567 0.456543H0.456537C0.204536 0.456543 0 0.661079 0 0.91308C0 1.16508 0.204536 1.36962 0.456537 1.36962H2.82131L5.04638 12.4969C5.34405 13.9851 6.66247 15.0653 8.17995 15.0653H18.7174C18.9694 15.0653 19.1739 14.8608 19.1739 14.6088C19.1739 14.3568 18.9694 14.1522 18.7174 14.1522Z"
                                          fill="#CA3192"/>
                                    <path d="M20.8859 3.35009C20.7991 3.25238 20.675 3.1958 20.5435 3.1958H4.1087C3.8567 3.1958 3.65216 3.40034 3.65216 3.65234C3.65216 3.90434 3.8567 4.10883 4.1087 4.10883H20.0267L19.3775 9.30039C19.2917 9.98427 18.7073 10.5001 18.018 10.5001H5.47826C5.22626 10.5001 5.02173 10.7047 5.02173 10.9567C5.02173 11.2087 5.22626 11.4132 5.47826 11.4132H18.018C19.1666 11.4132 20.1409 10.554 20.2833 9.41364L20.9964 3.70892C21.0128 3.57924 20.9726 3.44776 20.8859 3.35009Z"
                                          fill="#CA3192"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_140">
                                        <rect width="21" height="21" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>


                            <span class="basket__count">3</span>
                        </div>
                    </div>
                    <div class="menu-button" @click="buttonClick">
                        <div class="menu-button__label">Меню</div>
                        <div class="menu-button__icon icon-menu">
                            <span></span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="menu">
            <div class="search">
                <input type="text" class="search__input" placeholder="Поиск">
                <div class="search-icon">
                    <img class="search-icon__icon" src="icon/header/search.svg" alt="">
                </div>
            </div>
            <div class="menu__main">

                <div class="menu__column">
                    <div class="menu__item">
                        <a class="menu__label">
                            Обои
                            <img class="menu__arrow" @click="arrowClick" src="icon/header/arrow.svg" alt="">
                        </a>
                        <div class="menu__sublist">
                            <a href="" class="menu__sublist-link">Цветы </a>
                            <a href="" class="menu__sublist-link">Горы</a>
                            <a href="" class="menu__sublist-link">Детские</a>
                            <a href="" class="menu__sublist-link">Акварель</a>
                            <a href="" class="menu__sublist-link">Геометрия</a>
                            <a href="" class="menu__sublist-link">Градиенты</a>
                            <a href="" class="menu__sublist-link">Модерн</a>
                            <a href="" class="menu__sublist-link">Этника</a>
                            <a href="" class="menu__sublist-link">Классика</a>
                            <a href="" class="menu__sublist-link">Раскаски</a>
                            <a href="" class="menu__sublist-link">Природа</a>

                        </div>

                    </div>
                </div>
                <div class="menu__column">
                    <div class="menu__item">
                        <a class="menu__label">
                            Плитка
                            <img class="menu__arrow" @click="arrowClick" src="icon/header/arrow.svg" alt="">
                        </a>
                        <div class="menu__sublist">
                            <a href="" class="menu__sublist-link">Красная </a>
                            <a href="" class="menu__sublist-link">Не очень красная</a>
                            <a href="" class="menu__sublist-link">Почти не красная</a>
                            <a href="" class="menu__sublist-link">Возможно красная</a>

                        </div>
                    </div>
                    <div class="menu__item">
                        <a class="menu__label">
                            Картины
                            <img class="menu__arrow" @click="arrowClick" src="icon/header/arrow.svg" alt="">
                        </a>
                        <div class="menu__sublist">
                            <a href="" class="menu__sublist-link">Квадратные картины </a>
                            <a href="" class="menu__sublist-link">Не Квадратные картины</a>

                        </div>
                    </div>
                </div>
                <div class="menu__column">
                    <div class="menu__item">
                        <a class="menu__label">Краска
                            <img class="menu__arrow" @click="arrowClick" src="icon/header/arrow.svg" alt="">
                        </a>
                        <div class="menu__sublist">
                            <a href="" class="menu__sublist-link">Для стен </a>
                            <a href="" class="menu__sublist-link">Не для стен</a>
                            <a href="" class="menu__sublist-link">Для потолка</a>
                            <a href="" class="menu__sublist-link">Для пола</a>

                        </div>
                    </div>
                </div>
                <div class="menu__column">
                    <div class="menu__item">
                        <a class="menu__label">
                            Телепорт в нарнию
                            <img class="menu__arrow" @click="arrowClick" src="icon/header/arrow.svg" alt="">
                        </a>
                        <div class="menu__sublist">
                            <a href="" class="menu__sublist-link">Ну поехали</a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-footer">
                <div class="menu-footer__list">
                    <a href="" class="menu-footer__link">Обои</a>
                    <a href="" class="menu-footer__link">Плитка</a>
                    <a href="" class="menu-footer__link">Краски</a>
                    <a href="" class="menu-footer__link">О компании</a>
                    <a href="" class="menu-footer__link">Контакты</a>
                    <a href="" class="menu-footer__link">Стилистические подборки</a>
                    <a href="" class="menu-footer__link">Компания</a>
                </div>
                <div class="menu-social">
                    <a href="" class="menu-social__item">
                        <img src="/icon/social/instagram.svg" alt="" class="menu-social__image">
                    </a>
                    <a href="" class="menu-social__item">
                        <img src="/icon/social/facebook.svg" alt="" class="menu-social__image">
                    </a>
                    <a href="" class="menu-social__item">
                        <img src="/icon/social/twitter.svg" alt="" class="menu-social__image">
                    </a>
                    <a href="" class="menu-social__item">
                        <img src="/icon/social/pinterest.svg" alt="" class="menu-social__image">
                    </a>
                    <a href="" class="menu-social__item">
                        <img src="/icon/social/youtube.svg" alt="" class="menu-social__image">
                    </a>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    data() {
        return {
            pages: {
                main: {
                    name: "Главная",
                    href: "/",
                },
                contact: {
                    name: "Контакты",
                    href: "/contact",
                },
            }
        }
    },
    methods: {
        buttonClick () {
            const menu = document.querySelector('.menu');

            if (menu.classList.contains('menu_active') && window.innerWidth < 992) {
                const menuItem = document.querySelectorAll('.menu__item');
                const arrow = document.querySelectorAll('.menu__arrow');

                menuItem.forEach(item => {
                        item.style.height = 30 + 'px';
                        item.classList.remove('menu__item_active');
                    }
                );
                arrow.forEach(item => {
                    item.classList.remove('menu__arrow_active');
                });
            }
            menu.classList.toggle('menu_active');
        },
        arrowClick (e) {
            const targetElement = e.target;
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
    }
}
</script>