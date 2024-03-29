<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/b065351ae5.js" crossorigin="anonymous"></script>
</head>
<body class="body">
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
                <div class="logo">
                    <img class="logo__image" src="icon/header/logo.png" alt="">
                </div>
                <div class="menu-list">
                    <a href="" class="menu-list__link">Обои</a>
                    <a href="" class="menu-list__link">Плитка</a>
                    <a href="" class="menu-list__link">Краски</a>
                    <a href="" class="menu-list__link">О компании</a>
                    <a href="" class="menu-list__link">Контакты</a>
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
                <div class="menu-button">
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
                        <img class="menu__arrow" src="icon/header/arrow.svg" alt="">
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
                        <img class="menu__arrow" src="icon/header/arrow.svg" alt="">
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
                        <img class="menu__arrow" src="icon/header/arrow.svg" alt="">
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
                        <img class="menu__arrow" src="icon/header/arrow.svg" alt="">
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
                        <img class="menu__arrow" src="icon/header/arrow.svg" alt="">
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
                    <img src="./icon/social/instagram.svg" alt="" class="menu-social__image">
                </a>
                <a href="" class="menu-social__item">
                    <img src="./icon/social/facebook.svg" alt="" class="menu-social__image">
                </a>
                <a href="" class="menu-social__item">
                    <img src="./icon/social/twitter.svg" alt="" class="menu-social__image">
                </a>
                <a href="" class="menu-social__item">
                    <img src="./icon/social/pinterest.svg" alt="" class="menu-social__image">
                </a>
                <a href="" class="menu-social__item">
                    <img src="./icon/social/youtube.svg" alt="" class="menu-social__image">
                </a>
            </div>
        </div>
    </div>

</header>
<main class="main">

    <div class="main__wrapper">

        <div class="main-slider swiper">
            <div class="main-slider__wrapper swiper-wrapper">
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__image">
                        <img src="icon/main-slider/1.png" alt="">
                    </div>
                </div>
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__image">
                        <img src="icon/main-slider/1.png" alt="">
                    </div>
                </div>
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__image">
                        <img src="icon/main-slider/1.png" alt="">
                    </div>
                </div>
                <div class="main-slider__slide swiper-slide">
                    <div class="main-slider__image">
                        <img src="icon/main-slider/1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="main-slider__description">
                <div class="main-slider__label label">Производим дизайнерские обои</div>
                <div class="main-slider__text">В Респейс каждый дизайн по-своему преображает окружающее
                    пространство, а тщательно подобранные коллекции позволят гармонично вписать обои в любой
                    интерьер.В Респейс каждый дизайн по-своему преображает окружающее
                    пространство, а тщательно подобранные коллекции позволят гармонично вписать обои в любой
                    интерьер.В Респейс каждый дизайн по-своему преображает окружающее
                    пространство, а тщательно подобранные коллекции позволят гармонично вписать обои в любой
                    интерьер.В Респейс каждый дизайн по-своему преображает окружающее
                    пространство, а тщательно подобранные коллекции позволят гармонично вписать обои в любой
                    интерьер.
                </div>
                <div class="main-slider__pagination swiper-pagination"></div>
            </div>

            <div class="swiper-button-prev main-slider__button-prev main-slider__button"></div>
            <div class="swiper-button-next main-slider__button-next main-slider__button"></div>

        </div>

        <div class="gallery">
            <div class="container">
                <div class="gallery__label">
                    <a href="" class="label">Обои</a>
                    <a class="view-all">Стотреть все обои
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
                <div class="gallery__main">
                    <div class="gallery__column">
                        <div class="gallery__item" data-id='1'>
                            <div class="gallery__card">
                                <img src="icon/gallery/1.png" alt="" class="gallery__image">
                                <div class="gallery__description">
                                    <div class="gallery__description-label">Природа</div>
                                    <div class="gallery__description-text">Обои из этой коллекции добавят в ваш дом
                                        романтики и
                                        создадут атмосферу в которой приятно мечтать и строить воздушные замки.
                                    </div>
                                </div>
                            </div>
                            <a class="view-catalog">Природа
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="gallery__item" data-id='2'>
                            <div class="gallery__card ">
                                <img src="icon/gallery/2.png" alt="" class="gallery__image">
                                <div class="gallery__description">
                                    <div class="gallery__description-label">Природа</div>
                                    <div class="gallery__description-text">Обои из этой коллекции добавят в ваш дом
                                        романтики и
                                        создадут атмосферу в которой приятно мечтать и строить воздушные замки.
                                    </div>
                                </div>
                            </div>
                            <a class="view-catalog">Природа
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="gallery__item" data-id='3'>
                            <div class="gallery__card _mini">
                                <img src="icon/gallery/3.png" alt="" class="gallery__image">
                                <div class="gallery__description">
                                    <div class="gallery__description-label">Природа</div>
                                    <div class="gallery__description-text">Обои из этой коллекции добавят в ваш дом
                                        романтики и
                                        создадут атмосферу в которой приятно мечтать и строить воздушные замки.
                                    </div>
                                </div>
                            </div>
                            <a class="view-catalog">Природа
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>

                        <div class="special-card special-card_mobile">
                            <div class="special-card__label label">Оплата и доставка</div>
                            <div class="special-card__content">
                                <div class="special-card__item">
                                    <img src="icon/special-card/card.png" alt="" class="special-card__icon">
                                    Удобная оплата
                                </div>
                                <div class="special-card__item">
                                    <img src="icon/special-card/time.png" alt="" class="special-card__icon">
                                    Производство меньше недели
                                </div>
                                <div class="special-card__item">
                                    <img src="icon/special-card/delivery.png" alt="" class="special-card__icon">
                                    Быстрая доставка
                                </div>
                            </div>
                            <div class="special-card__address">
                                <div class="special-card__address-label">Самовывоз:</div>
                                Россия, Москва, ул. Новодмитровская, 1с1 (ст. метро «Дитровская»)
                            </div>
                            <div class="special-card__prise">Обои от <span>1240</span> ₽/м2</div>
                        </div>

                        <a class="view-all-button">Смотреть все обои</a>


                    </div>
                    <div class="gallery__column">
                        <div class="gallery__item _mini" data-id='4'>
                            <div class="gallery__card _mini">
                                <img src="icon/gallery/4.png" alt="" class="gallery__image">
                                <div class="gallery__description">
                                    <div class="gallery__description-label">Природа</div>
                                    <div class="gallery__description-text">Обои из этой коллекции добавят в ваш дом
                                        романтики и
                                        создадут атмосферу в которой приятно мечтать и строить воздушные замки.
                                        Обои из этой коллекции добавят в ваш дом романтики и
                                        создадут атмосферу в которой приятно мечтать и строить воздушные замки.
                                        Обои из этой коллекции добавят в ваш дом романтики и
                                        создадут атмосферу в которой приятно мечтать и строить воздушные замки.
                                    </div>
                                </div>
                            </div>
                            <a class="view-catalog">Природа
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="gallery__item" data-id='5'>
                            <div class="special-card">
                                <div class="special-card__label label">Оплата и доставка</div>
                                <div class="special-card__content">
                                    <div class="special-card__item">
                                        <img src="icon/special-card/card.png" alt="" class="special-card__icon">
                                        Удобная оплата
                                    </div>
                                    <div class="special-card__item">
                                        <img src="icon/special-card/time.png" alt="" class="special-card__icon">
                                        Производство меньше недели
                                    </div>
                                    <div class="special-card__item">
                                        <img src="icon/special-card/delivery.png" alt="" class="special-card__icon">
                                        Быстрая доставка
                                    </div>
                                </div>
                                <div class="special-card__address">
                                    <div class="special-card__address-label">Самовывоз:</div>
                                    Россия, Москва, ул. Новодмитровская, 1с1 (ст. метро «Дитровская»)
                                </div>
                                <div class="special-card__prise">Обои от <span>1240</span> ₽/м2</div>
                            </div>
                            <a class="view-catalog">
                            </a>
                        </div>
                        <div class="gallery__item" data-id='6'>
                            <div class="gallery__card">
                                <img src="icon/gallery/6.png" alt="" class="gallery__image">
                                <div class="gallery__description">
                                    <div class="gallery__description-label">Природа</div>
                                    <div class="gallery__description-text">Обои из этой коллекции добавят в ваш дом
                                        романтики и
                                        создадут атмосферу в которой приятно мечтать и строить воздушные замки.
                                    </div>
                                </div>
                            </div>
                            <a class="view-catalog">Природа
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="gallery__column">
                        <div class="gallery__item" data-id='7'>
                            <div class="gallery__card ">
                                <img src="icon/gallery/7.png" alt="" class="gallery__image">
                                <div class="gallery__description">
                                    <div class="gallery__description-label">Природа</div>
                                    <div class="gallery__description-text">Обои из этой коллекции добавят в ваш дом
                                        романтики и
                                        создадут атмосферу в которой приятно мечтать и строить воздушные замки.
                                    </div>
                                </div>
                            </div>
                            <a class="view-catalog">Природа
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="gallery__item" data-id='8'>
                            <div class="gallery__card">
                                <img src="icon/gallery/8.png" alt="" class="gallery__image">
                                <div class="gallery__description">
                                    <div class="gallery__description-label">Природа</div>
                                    <div class="gallery__description-text">Обои из этой коллекции добавят в ваш дом
                                        романтики и
                                        создадут атмосферу в которой приятно мечтать и строить воздушные замки.
                                    </div>
                                </div>
                            </div>
                            <a class="view-catalog">Природа
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="gallery__item _mini" data-id='9'>
                            <div class="gallery__card _mini">
                                <img src="icon/gallery/9.png" alt="" class="gallery__image">
                                <div class="gallery__description">
                                    <div class="gallery__description-label">Природа</div>
                                    <div class="gallery__description-text">Обои из этой коллекции добавят в ваш дом
                                        романтики и
                                        создадут атмосферу в которой приятно мечтать и строить воздушные замки.
                                    </div>
                                </div>
                            </div>
                            <a class="view-catalog">Природа
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="gallery__column">
                        <div class="gallery__item _mini" data-id='10'>
                            <div class="gallery__card _mini">
                                <img src="icon/gallery/10.png" alt="" class="gallery__image">
                                <div class="gallery__description">
                                    <div class="gallery__description-label">Природа</div>
                                    <div class="gallery__description-text">Обои из этой коллекции добавят в ваш дом
                                        романтики и
                                        создадут атмосферу в которой приятно мечтать и строить воздушные замки.
                                    </div>
                                </div>
                            </div>
                            <a class="view-catalog">Природа
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="gallery__item" data-id='11'>
                            <div class="gallery__card ">
                                <img src="icon/gallery/5.png" alt="" class="gallery__image">
                                <div class="gallery__description">
                                    <div class="gallery__description-label">Природа</div>
                                    <div class="gallery__description-text">Обои из этой коллекции добавят в ваш дом
                                        романтики и
                                        создадут атмосферу в которой приятно мечтать и строить воздушные замки.
                                    </div>
                                </div>
                            </div>
                            <a class="view-catalog">Природа
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="gallery__item " data-id='12'>
                            <div class="gallery__card ">
                                <img src="icon/gallery/11.png" alt="" class="gallery__image">
                                <div class="gallery__description">
                                    <div class="gallery__description-label">Природа</div>
                                    <div class="gallery__description-text">Обои из этой коллекции добавят в ваш дом
                                        романтики и
                                        создадут атмосферу в которой приятно мечтать и строить воздушные замки.
                                    </div>
                                </div>
                            </div>
                            <a class="view-catalog">Природа
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="subscribe-banner">
            <div class="subscribe-banner__container container">
                <img src="icon/subscribe-banner/instagram.png" alt="" class="subscribe-banner__icon">
                <div class="subscribe-banner__main">
                    <div class="subscribe-banner__labels">
                        <img src="icon/subscribe-banner/instagram.png" alt="" class="subscribe-banner__mobile-icon">
                        <div class="subscribe-banner__label label">Респейс в Instagram</div>
                    </div>
                    <div class="subscribe-banner__text">Подписывайтесь на наш Instagram, следите за новостями, мы
                        публикуем много всего интересного! Все подписчики получают промо-код на скидку 5%!
                    </div>
                </div>
                <button class="subscribe-banner__button">Подписаться</button>
            </div>
        </div>

        <div class="wallpaper-slider">
            <div class="wallpaper-slider__container container">
                <div class="wallpaper-slider__label label">Новые обои</div>
                <div class="wallpaper-slider__main">
                    <div class="wallpaper-slider__slider swiper">
                        <div class="wallpaper-slider__wrapper swiper-wrapper">
                            <div class="wallpaper-slider__slide swiper-slide">
                                <div class="wallpaper-slider__image">
                                    <img src="icon/wallpaper-slider/xx.jpg" alt="">
                                </div>
                                <a class="view-catalog">Мираж
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </div>
                            <div class="wallpaper-slider__slide swiper-slide">
                                <div class="wallpaper-slider__image">
                                    <img src="icon/wallpaper-slider/2.png" alt="">
                                </div>
                                <a class="view-catalog">Мираж
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </div>
                            <div class="wallpaper-slider__slide swiper-slide">
                                <div class="wallpaper-slider__image">
                                    <img src="icon/wallpaper-slider/3.png" alt="">
                                </div>
                                <a class="view-catalog">Мираж
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </div>
                            <div class="wallpaper-slider__slide swiper-slide">
                                <div class="wallpaper-slider__image">
                                    <img src="icon/wallpaper-slider/4.png" alt="">
                                </div>
                                <a class="view-catalog">Мираж
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </div>
                            <div class="wallpaper-slider__slide swiper-slide">
                                <div class="wallpaper-slider__image">
                                    <img src="icon/wallpaper-slider/5.png" alt="">
                                </div>
                                <a class="view-catalog">Мираж
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </div>
                            <div class="wallpaper-slider__slide swiper-slide">
                                <div class="wallpaper-slider__image">
                                    <img src="icon/wallpaper-slider/6.png" alt="">
                                </div>
                                <a class="view-catalog">Мираж
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </div>
                            <div class="wallpaper-slider__slide swiper-slide">
                                <div class="wallpaper-slider__image">
                                    <img src="icon/wallpaper-slider/7.png" alt="">
                                </div>
                                <a class="view-catalog">Мираж
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </div>
                            <div class="wallpaper-slider__slide swiper-slide">
                                <div class="wallpaper-slider__image">
                                    <img src="icon/wallpaper-slider/8.png" alt="">
                                </div>
                                <a class="view-catalog">Мираж
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev wallpaper-slider__button-prev wallpaper-slider__button"></div>
                    <div class="swiper-button-next wallpaper-slider__button-next wallpaper-slider__button"></div>
                </div>

            </div>
        </div>

        <div class="tile-catalog">
            <div class="tile-catalog__container container">
                <div class="tile-catalog__top banner">
                    <div class="banner__main">
                        <a class="banner__label label">Керамическая плитка</a>
                        <div class="tile-catalog-banner__text banner__text"><span>
                            Дизайнерская керамическая плитка – нестандартное,
                            яркое решение,
                            которое часто можно применить только в уникальных, идеальных по соблюдению стилистики
                            помещениях. Такие коллекции часто выпускаются ограниченной серией или становятся
                            единственными в своем роде.
                            <br>
                            <br>
                            Керамическая плитка в интерьере выглядит достаточно стильно, оригинально, так как имеет
                            матовую или глянцевую поверхность, а также разнообразную текстуру, орнамент и рисунок. Этот
                            материал используется для отделки стен, потолков, кухонных фартуков и широко применяется в
                            дизайне гостиной и ванной комнаты.
                        </span>
                            <a class="view-all">Смотреть всю плитку
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="banner__image banner__image_revert">
                        <img src="icon/tile-catalog/main.png" alt="">
                    </div>
                </div>
                <div class="tile-catalog__main">
                    <div class="tile-catalog__gallery gallery">
                        <div class="gallery__main tile-catalog__gallery">
                            <div class="gallery__column">
                                <div class="gallery__item" data-id='1'>
                                    <div class="gallery__card">
                                        <img src="icon/tile-catalog/1.png" alt="" class="gallery__image">
                                        <div class="gallery__description">
                                            <div class="gallery__description-label">Природа</div>
                                            <div class="gallery__description-text">Обои из этой коллекции добавят в ваш
                                                дом
                                                романтики и
                                                создадут атмосферу в которой приятно мечтать и строить воздушные замки.
                                            </div>
                                        </div>
                                    </div>
                                    <a class="view-catalog">Природа
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                                <div class="gallery__item" data-id='2'>
                                    <div class="gallery__card _mini">
                                        <img src="icon/tile-catalog/2.png" alt="" class="gallery__image">
                                        <div class="gallery__description">
                                            <div class="gallery__description-label">Природа</div>
                                            <div class="gallery__description-text">Обои из этой коллекции добавят в ваш
                                                дом
                                                романтики и
                                                создадут атмосферу в которой приятно мечтать и строить воздушные замки.
                                            </div>
                                        </div>
                                    </div>
                                    <a class="view-catalog">Природа
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                                <div class="special-card special-card_mobile">
                                    <div class="special-card__label label">Оплата и доставка</div>
                                    <div class="special-card__content">
                                        <div class="special-card__item">
                                            <img src="icon/special-card/card.png" alt="" class="special-card__icon">
                                            Удобная оплата
                                        </div>
                                        <div class="special-card__item">
                                            <img src="icon/special-card/time.png" alt="" class="special-card__icon">
                                            Производство меньше недели
                                        </div>
                                        <div class="special-card__item">
                                            <img src="icon/special-card/delivery.png" alt="" class="special-card__icon">
                                            Быстрая доставка
                                        </div>
                                    </div>
                                    <div class="special-card__address">
                                        <div class="special-card__address-label">Самовывоз:</div>
                                        Россия, Москва, ул. Новодмитровская, 1с1 (ст. метро «Дитровская»)
                                    </div>
                                    <div class="special-card__prise">Обои от <span>1240</span> ₽/м2</div>
                                </div>
                                <a class="view-all-button">Смотреть всю плитку</a>
                            </div>
                            <div class="gallery__column">
                                <div class="gallery__item" data-id='3'>
                                    <div class="gallery__card _mini">
                                        <img src="icon/tile-catalog/4.png" alt="" class="gallery__image">
                                        <div class="gallery__description">
                                            <div class="gallery__description-label">Природа</div>
                                            <div class="gallery__description-text">Обои из этой коллекции добавят в ваш
                                                дом
                                                романтики и
                                                создадут атмосферу в которой приятно мечтать и строить воздушные замки.
                                            </div>
                                        </div>
                                    </div>
                                    <a class="view-catalog">Природа
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                                <div class="gallery__item" data-id='4'>
                                    <div class="special-card ">
                                        <div class="special-card__label label">Оплата и доставка</div>
                                        <div class="special-card__content">
                                            <div class="special-card__item">
                                                <img src="icon/special-card/card.png" alt="" class="special-card__icon">
                                                Удобная оплата
                                            </div>
                                            <div class="special-card__item">
                                                <img src="icon/special-card/time.png" alt="" class="special-card__icon">
                                                Производство меньше недели
                                            </div>
                                            <div class="special-card__item">
                                                <img src="icon/special-card/delivery.png" alt=""
                                                     class="special-card__icon">
                                                Быстрая доставка
                                            </div>
                                        </div>
                                        <div class="special-card__address">
                                            <div class="special-card__address-label">Самовывоз:</div>
                                            Россия, Москва, ул. Новодмитровская, 1с1 (ст. метро «Дитровская»)
                                        </div>
                                        <div class="special-card__prise">Питка <span>5440</span> ₽/м2</div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery__column">
                                <div class="gallery__item" data-id='5'>
                                    <div class="gallery__card">
                                        <img src="icon/tile-catalog/6.png" alt="" class="gallery__image">
                                        <div class="gallery__description">
                                            <div class="gallery__description-label">Природа</div>
                                            <div class="gallery__description-text">Обои из этой коллекции добавят в ваш
                                                дом
                                                романтики и
                                                создадут атмосферу в которой приятно мечтать и строить воздушные замки.
                                            </div>
                                        </div>
                                    </div>
                                    <a class="view-catalog">Природа
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                                <div class="gallery__item" data-id='6'>
                                    <div class="gallery__card _mini">
                                        <img src="icon/tile-catalog/5.png" alt="" class="gallery__image">
                                        <div class="gallery__description">
                                            <div class="gallery__description-label">Природа</div>
                                            <div class="gallery__description-text">Обои из этой коллекции добавят в ваш
                                                дом
                                                романтики и
                                                создадут атмосферу в которой приятно мечтать и строить воздушные замки.
                                            </div>
                                        </div>
                                    </div>
                                    <a class="view-catalog">Природа
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="gallery__column">
                                <div class="gallery__item" data-id='7'>
                                    <div class="gallery__card _mini">
                                        <img src="icon/tile-catalog/7.png" alt="" class="gallery__image">
                                        <div class="gallery__description">
                                            <div class="gallery__description-label">Природа</div>
                                            <div class="gallery__description-text">Обои из этой коллекции добавят в ваш
                                                дом
                                                романтики и
                                                создадут атмосферу в которой приятно мечтать и строить воздушные замки.
                                            </div>
                                        </div>
                                    </div>
                                    <a class="view-catalog">Природа
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                                <div class="gallery__item" data-id='8'>
                                    <div class="gallery__card">
                                        <img src="icon/tile-catalog/4.png" alt="" class="gallery__image">
                                        <div class="gallery__description">
                                            <div class="gallery__description-label">Природа</div>
                                            <div class="gallery__description-text">Обои из этой коллекции добавят в ваш
                                                дом
                                                романтики и
                                                создадут атмосферу в которой приятно мечтать и строить воздушные замки.
                                            </div>
                                        </div>
                                    </div>
                                    <a class="view-catalog">Природа
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="paint">
            <div class="paint__container container">
                <div class="paint-main">

                    <div class="paint-main banner">
                        <div class="paint-main__image banner__image">
                            <img src="icon/paint/banner-image.png" alt="">
                        </div>
                        <div class="banner__main">
                            <a class="paint-main__label banner__label label">Краски</a>
                            <div class="paint-main__text banner__text">
                                Сказать однозначно, какая краска для стен лучше, нельзя, ведь единого рейтинга не
                                существует.
                                Выбор зависит от бюджета и типа комнаты, которую нужно красить.
                                <br>
                                <br>
                                Все материалы можно поделить на три группы: для наружных работ, для внутренних и
                                универсальные,
                                которые можно использовать в обоих случаях.
                                Логично, что для интерьерного ремонта подойдут два вида из трёх: специализированные
                                колеры и
                                универсальные.
                                Почему не стоит использовать материалы, предназначенные для улицы?
                            </div>
                        </div>
                    </div>

                </div>
                <div class="paint-filter">
                    <button class="paint-filter__select view-all-button">
                        <span class="paint-filter__select-text">Выбрать цвет</span>
                        <i class="paint-filter__select-icon fa-solid fa-caret-down"></i>
                    </button>
                    <div class="paint-filter__list tabs-container">
                        <button class="paint-filter__tab tab" data-filter='red'>Акцентные цвета(red)</button>
                        <button class="paint-filter__tab tab" data-filter='blue'>Нейтральные цвета(blue)</button>
                        <button class="paint-filter__tab tab" data-filter='green'>Скандинавские цвета(green)</button>
                        <button class="paint-filter__tab tab" data-filter='modern'>Современные цвета</button>
                        <button class="paint-filter__tab tab" data-filter='flugger'>Палитра Flugger 900</button>
                    </div>
                    <a class="paint-view-all view-all">Стотреть все краски
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
                <div class="paint-catalog">
                    <div class="paint-catalog__list">
                        <a class="paint-catalog__item " data-filter='red' style="background-color: red">
                            <img class="paint-catalog__icon" alt="" src="icon/paint/pain-icon.png">
                            <div class="paint-catalog__color">red</div>
                        </a>
                        <a class="paint-catalog__item " data-filter='red' style="background-color: darkred">
                            <img class="paint-catalog__icon" alt="" src="icon/paint/pain-icon.png">
                            <div class="paint-catalog__color">red</div>
                        </a>
                        <a class="paint-catalog__item" data-filter='blue' style="background-color: blue">
                            <img class="paint-catalog__icon" alt="" src="icon/paint/pain-icon.png">
                            <div class="paint-catalog__color">blue</div>
                        </a>
                        <a class="paint-catalog__item" data-filter='blue|modern|flugger'
                           style="background-color: cadetblue">
                            <img class="paint-catalog__icon" alt="" src="icon/paint/pain-icon.png">
                            <div class="paint-catalog__color">blue|modern|fluger</div>
                        </a>
                        <a class="paint-catalog__item" data-filter='modern' style="background-color: violet">
                            <img class="paint-catalog__icon" alt="" src="icon/paint/pain-icon.png">
                            <div class="paint-catalog__color">modern</div>
                        </a>
                        <a class="paint-catalog__item" data-filter='grey|modern' style="background-color: grey">
                            <img class="paint-catalog__icon" alt="" src="icon/paint/pain-icon.png">
                            <div class="paint-catalog__color">grey|modern</div>
                        </a>
                        <a class="paint-catalog__item" data-filter='flugger|green' style="background-color: darkgreen">
                            <img class="paint-catalog__icon" alt="" src="icon/paint/pain-icon.png">
                            <div class="paint-catalog__color">fluger|green</div>
                        </a>
                        <a class="paint-catalog__item" data-filter='red|flugger' style="background-color: orangered">
                            <img class="paint-catalog__icon" alt="" src="icon/paint/pain-icon.png">
                            <div class="paint-catalog__color">red|flugger</div>
                        </a>
                        <a class="paint-catalog__item" data-filter='flugger' style="background-color: darkviolet">
                            <img class="paint-catalog__icon" alt="" src="icon/paint/pain-icon.png">
                            <div class="paint-catalog__color">fluger</div>
                        </a>
                        <a class="paint-catalog__item" data-filter='blue|green' style="background-color: steelblue">
                            <img class="paint-catalog__icon" alt="" src="icon/paint/pain-icon.png">
                            <div class="paint-catalog__color">blue|green</div>
                        </a>
                    </div>
                    <a class="view-all-button">Смотреть все краски</a>
                </div>
            </div>
        </div>

        <div class="video">
            <div class="container">
                <div class="banner">
                    <div class="banner__main">
                        <div class="banner__label label">Дизайнерские обои вашей мечты</div>
                        <div class="banner__text">Обои Респейс будут полностью соответствовать вашим пожеланиям или
                            требованиям дизайн проекта. Привычный интерьер заиграет новыми красками, а если вы решили
                            полностью обновить свою квартиру и делаете ремонт — дизайнерские обои Респейс на ваших
                            стенах очаруют вас с первой же минуты.
                        </div>
                    </div>
                    <div class="banner__video banner__video_revert">
                        <iframe loading="lazy" src="https://www.youtube.com/embed/VrP3lO3aGDg"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;
                          picture-in-picture; web-share" allowfullscreen></iframe>

                    </div>
                </div>
            </div>
        </div>

        <div class="about-us">
            <div class="about-us__container container">
                <div class="about-us__label label">Партнеры о нас</div>
                <div class="about-us__slider swiper">
                    <div class="about-us__wrapper swiper-wrapper">
                        <div class="about-us__slide swiper-slide">
                            <div class="about-us__image">
                                <img src="icon/about-us/1.png" alt="">
                            </div>
                            <div class="about-us__image-mini">
                                <img src="icon/about-us/2.png" alt="" class="about-us__image-mini">
                            </div>
                            <div class="about-us__image-mini">
                                <img src="icon/about-us/3.png" alt="" class="about-us__image-mini">
                            </div>
                            <div class="about-us__image-mini">
                                <img src="icon/about-us/4.png" alt="" class="about-us__image-mini">
                            </div>
                            <div class="about-us__image-mini">
                                <img src="icon/about-us/5.png" alt="" class="about-us__image-mini">
                            </div>
                            <div class="about-us__designers designers">
                                <div class="designers__wrapper">
                                    <img src="icon/about-us/logo.png" alt="" class="designers__logo">

                                    <div class="designers__description">
                                        <div class="designers__name">Борисова Ольга, дизайнер</div>
                                        <div class="designers__social">
                                            <img alt="" src="icon/about-us/inst.png" class="designers__icon">
                                            <a class="designers__social-link">@borisova_interior</a>
                                        </div>
                                        <div class="designers__text">
                                            Вот уже год мы ждём публикации этого проекта в журнале.
                                            А как же хочется поделитьсяим.
                                            А вам нравится двери invisible?
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto
                                            asperiores enim exercitationem neque nisi rem sed sint ut. Assumenda autem
                                            deleniti dolore facere nesciunt possimus provident quae temporibus totam
                                            veniam.
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-us__slide swiper-slide">
                            <div class="about-us__image">
                                <img src="icon/about-us/slide1.jpg" alt="">
                            </div>
                            <div class="about-us__image-mini">
                                <img src="icon/about-us/slide2.jpg" alt="" class="about-us__image-mini">
                            </div>
                            <div class="about-us__image-mini">
                                <img src="icon/about-us/slide3.jpg" alt="" class="about-us__image-mini">
                            </div>
                            <div class="about-us__image-mini">
                                <img src="icon/about-us/slide4.jpg" alt="" class="about-us__image-mini">
                            </div>
                            <div class="about-us__image-mini">
                                <img src="icon/about-us/slide5.jpg" alt="" class="about-us__image-mini">
                            </div>
                            <div class="about-us__designers designers">
                                <div class="designers__wrapper">
                                    <img src="icon/about-us/slide4.jpg" alt="" class="designers__logo">

                                    <div class="designers__description">
                                        <div class="designers__name">Борисова Ольга, дизайнер</div>
                                        <div class="designers__social">
                                            <img alt="" src="icon/about-us/inst.png" class="designers__icon">
                                            <a class="designers__social-link">@borisova_interior</a>
                                        </div>
                                        <div class="designers__text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto
                                            asperiores enim exercitationem neque nisi rem sed sint ut. Assumenda autem
                                            deleniti dolore facere nesciunt possimus provident quae temporibus totam
                                            veniam.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-us__slide swiper-slide">
                            <div class="about-us__image">
                                <img src="icon/about-us/1.png" alt="">
                            </div>
                            <div class="about-us__image-mini">
                                <img src="icon/about-us/2.png" alt="" class="about-us__image-mini">
                            </div>
                            <div class="about-us__image-mini">
                                <img src="icon/about-us/3.png" alt="" class="about-us__image-mini">
                            </div>
                            <div class="about-us__image-mini">
                                <img src="icon/about-us/4.png" alt="" class="about-us__image-mini">
                            </div>
                            <div class="about-us__image-mini">
                                <img src="icon/about-us/5.png" alt="" class="about-us__image-mini">
                            </div>
                            <div class="about-us__designers designers">
                                <div class="designers__wrapper">
                                    <img src="icon/about-us/logo.png" alt="" class="designers__logo">

                                    <div class="designers__description">
                                        <div class="designers__name">Борисова Ольга, дизайнер</div>
                                        <div class="designers__social">
                                            <img alt="" src="icon/about-us/inst.png" class="designers__icon">
                                            <a class="designers__social-link">@borisova_interior</a>
                                        </div>
                                        <div class="designers__text">Вот уже год мы ждём публикации этого проекта в
                                            журнале.
                                            А как же хочется поделитьсяим.
                                            А вам нравится двери invisible?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev about-us__button-prev about-us__button"></div>
                    <div class="swiper-button-next about-us__button-next about-us__button"></div>
                </div>

            </div>
        </div>

        <div class="presentation">
            <div class="container">
                <div class="banner">
                    <div class="banner__main">
                        <div class="banner__label label">Индивидуальный подход к каждому клиенту</div>
                        <div class="presentation__text banner__text">Мы всегда готовы идти вам на встречу и обговаривать
                            особые условия по
                            производству, срокам и доставке. Дизайнерские обои Респейс — это не только качественный
                            отделочный материал, это еще и сервис, который позволит вам быть уверенными в безупречном
                            качестве и результате, который превзойдет ваши ожидания.
                            <br>
                            Наша главная задача в том, чтобы вы остались довольны и рекомендовали на своим друзьям и
                            знакомым.
                        </div>
                    </div>
                    <div class="presentation__image banner__image banner__image_revert">
                        <img src="icon/presentation/banner-image.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="wallpaper-gallery">

            <div class="wallpaper-gallery__item banner">
                <div class="wallpaper-gallery__image ">
                    <img src="icon/wallpaper-gallery/1.png" alt="">
                </div>
                <div class="wallpaper-gallery__main ">
                    <div class="wallpaper-gallery__label label">Дизайнерские обои для спальни</div>
                    <div class="wallpaper-gallery__text">
                        Существует множество способов того, как поклеить обои в спальне.
                        Совсем не обязательно ограничивать себя вариантом, когда одни и те же обои клеятся на все стены.
                        <br>
                        Спальня — место вашего отдыха, где ничто не должно вам мешать или беспокоить вас.
                        Чем лучше вы подберете обои для спальни, тем приятней вам будет готовиться ко сну и
                        тем больший заряд бодрости вы будете получать, просыпаясь. Все больше людей, при оформлении
                        спальни,
                        отдают предпочтение обоям на одну, акцентную, стену. Такой подход позволяет, с одной стороны,
                        всегда
                        иметь перед глазами то, что нравится, с другой не перегружает окружающее пространство. Таким
                        образом,
                        вы каждое утро будете видеть то, что вам нравится и получать заряд бодрости.
                        <br>
                        <br>
                        Еще один способ — это наклеить несколько полос обоев за кроватью — это позволит вам создать
                        отдельную
                        зону внутри своей спальни и наполнить ее новыми красками.
                        <br>
                        Не бойтесь экспериментировать, кроме того, вы всегда можете обратиться к
                        нашим дизайнерам за бесплатным советом. Будем рады вам помочь!
                    </div>
                    <div class="wallpaper-gallery__category">На фотографии - обои «<a class="wallpaper-gallery__link"
                                                                                      href="">Поднебесье</a>»
                    </div>
                </div>
            </div>
            <div class="wallpaper-gallery__item banner">
                <div class="wallpaper-gallery__image">
                    <img src="icon/wallpaper-gallery/2.png" alt="">
                </div>
                <div class="wallpaper-gallery__main ">
                    <div class="wallpaper-gallery__label label">Дизайнерские обои для гостиной</div>
                    <div class="wallpaper-gallery__text">
                        В гостиной хорошо смотрятся обои с необычным рисунком, который создает определенный колорит,
                        зачастую,
                        олицетворяющий характер хозяев. Перед тем, как приступить к выбору дизайнерских обоев,
                        подумайте, какой вы
                        хотите видеть свою гостиную: теплой и уютной или же прохладной и воздушной? Если вам по душе
                        “уютный” вариант,
                        то, скорее всего, вам подойдут обои пастельных,
                        оранжевых или желтых тонов, а если же вам ближе строгий и холодный стиль, то ваш выбор — это
                        обои синего, голубого и серого тона.
                        <br>
                        Помните, что в Интернет-магазине обоев Респейс, вы можете
                        бесплатно изменить цвет любых обоев из нашего каталога на тот, который вам больше подходит.

                    </div>
                    <div class="wallpaper-gallery__category">На фотографии - обои «<a class="wallpaper-gallery__link"
                                                                                      href="">Теория струн</a>»
                    </div>
                </div>
            </div>
            <div class="wallpaper-gallery__item banner">
                <div class="wallpaper-gallery__image ">
                    <img src="icon/wallpaper-gallery/3.png" alt="">
                </div>
                <div class="wallpaper-gallery__main ">
                    <div class="wallpaper-gallery__label label">Дизайнерские обои для кухни</div>
                    <div class="wallpaper-gallery__text">
                        Обои для кухни должны быть, прежде всего, быть практичными: устойчивыми к механическим
                        повреждениям,
                        воздействию солнечных лучей и, конечно же, моющимися.
                        <br>
                        Для того, чтобы дизайнерские обои Респейс радовали вас долгие годы мы рекомендуем заказывать
                        специальное защитное покрытие с ним вы можете не переживать если случайно расплескали кофе
                        или на обои попали жирные брызги, просто протрите обои влажной тряпкой и обои будут как новые.

                    </div>
                    <div class="wallpaper-gallery__category">На фотографии - обои «<a class="wallpaper-gallery__link"
                                                                                      href="">Фермопилы</a>»
                    </div>
                </div>
            </div>
            <div class="wallpaper-gallery__item banner">
                <div class="wallpaper-gallery__image ">
                    <img src="icon/wallpaper-gallery/4.png" alt="">
                </div>
                <div class="wallpaper-gallery__main ">
                    <div class="wallpaper-gallery__label label">Дизайнерские обои для детской</div>
                    <div class="wallpaper-gallery__text">
                        Главное на что нужно обратить внимание при выборе обоев для детской — это
                        экологичность и прочность — качества которые неизменно проверяются при производстве дизайнерских
                        обоев Респейс.
                        <br>
                        Кроме того, в нашем Интернет-магазине вы можете купить обои, которые производятся при участии
                        профессиональных психологов и талантливых художников.
                        Такие обои подарят вашим детям много радости и будут способствовать их всестороннему развитию.
                        <br>
                        Если вы хотите создать уникальный дизайн детской, мы можем нарисовать обои специально
                        под вас. Стоимость разработки уникального дизайна зависит от сложности и начинается от 2000
                        рублей.
                    </div>
                    <div class="wallpaper-gallery__category">На фотографии - обои «<a class="wallpaper-gallery__link"
                                                                                      href="">Винни Пух</a>»
                    </div>
                </div>
            </div>
            <div class="wallpaper-gallery__item banner">
                <div class="wallpaper-gallery__image ">
                    <img src="icon/wallpaper-gallery/5.png" alt="">
                </div>
                <div class="wallpaper-gallery__main ">
                    <div class="wallpaper-gallery__label label">Дизайнерские обои для ванны</div>
                    <div class="wallpaper-gallery__text">
                        Нас часто спрашивают - можно ли наши обои клеить в ванной комнате?
                        Да! Дизайнерские обои Респейс отлично подходят также и для ванных комнат при условии,
                        что не будет прямого воздействия воды. Вы сможете создать уникальный дизайн и быть уверенными,
                        что обои прослужат вам долгие годы.
                    </div>
                    <div class="wallpaper-gallery__category">На фотографии - обои «<a class="wallpaper-gallery__link"
                                                                                      href="">Катори</a>»
                    </div>
                </div>
            </div>

        </div>

        <div class="advantages">
            <div class="advantages__container container">
                <div class="advantages__label label">Почему стоит купить дизайнерские обои Респейс?</div>
                <div class="advantages__main">
                    <div class="advantages__item">
                        <div class="advantages__labels">
                            <img src="icon/advantages/1.png" alt="" class="advantages__icon">
                            <div class="advantages__item-label">Удобство</div>
                            <img src="icon/advantages/icon.png" alt="" class="advantages__arrow">
                        </div>
                        <div class="advantages__text">
                            В своей жизни видела много обоев, и качество было очень разным.
                            Летом столкнулась с этим магазином, решила делать ремонт в своей спальне. Обои выбрала -
                            полевые цветы. Очень и очень довольна я качеством!
                            Менеджер подобрал именно то, что я хотела, со сроками не затянул. Можно сказать сработали
                            четко. Абсолютна согласна, что обои стоят своих денег
                        </div>
                    </div>
                    <div class="advantages__item">
                        <div class="advantages__labels">
                            <img src="icon/advantages/2.png" alt="" class="advantages__icon">
                            <div class="advantages__item-label">Лучшие цены</div>
                            <img src="icon/advantages/icon.png" alt="" class="advantages__arrow">
                        </div>
                        <div class="advantages__text">
                            В своей жизни видела много обоев, и качество было очень разным. Летом столкнулась с этим
                            магазином, решила делать ремонт в своей спальне. Обои выбрала - полевые цветы. Очень и очень
                            довольна я качеством! Менеджер подобрал именно то, что я хотела, со сроками не затянул.
                            Можно сказать сработали четко. Абсолютна согласна, что обои стоят своих денег
                        </div>
                    </div>
                    <div class="advantages__item">
                        <div class="advantages__labels">
                            <img src="icon/advantages/3.png" alt="" class="advantages__icon">
                            <div class="advantages__item-label">Разнообразие</div>
                            <img src="icon/advantages/icon.png" alt="" class="advantages__arrow">
                        </div>
                        <div class="advantages__text">
                            В своей жизни видела много обоев, и качество было очень разным. Летом столкнулась с этим
                            магазином, решила делать ремонт в своей спальне. Обои выбрала - полевые цветы. Очень и очень
                            довольна я качеством! Менеджер подобрал именно то, что я хотела, со сроками не затянул.
                            Можно сказать сработали четко. Абсолютна согласна, что обои стоят своих денег
                        </div>
                    </div>
                    <div class="advantages__item">
                        <div class="advantages__labels">
                            <img src="icon/advantages/4.png" alt="" class="advantages__icon">
                            <div class="advantages__item-label">Индивидуальный
                                подход
                            </div>
                            <img src="icon/advantages/icon.png" alt="" class="advantages__arrow">
                        </div>
                        <div class="advantages__text">
                            В своей жизни видела много обоев, и качество было очень разным.
                            Летом столкнулась с этим магазином, решила делать ремонт в своей спальне. Обои выбрала -
                            полевые цветы. Очень и очень довольна я качеством!
                            Менеджер подобрал именно то, что я хотела, со сроками не затянул. Можно сказать сработали
                            четко. Абсолютна согласна, что обои стоят своих денег
                        </div>
                    </div>
                    <div class="advantages__item">
                        <div class="advantages__labels">
                            <img src="icon/advantages/5.png" alt="" class="advantages__icon">
                            <div class="advantages__item-label">Скидки клиентам</div>
                            <img src="icon/advantages/icon.png" alt="" class="advantages__arrow">
                        </div>
                        <div class="advantages__text">
                            В своей жизни видела много обоев, и качество было очень разным.
                            Летом столкнулась с этим магазином, решила делать ремонт в своей спальне. Обои выбрала -
                            полевые цветы. Очень и очень довольна я качеством!
                            Менеджер подобрал именно то, что я хотела, со сроками не затянул. Можно сказать сработали
                            четко. Абсолютна согласна, что обои стоят своих денег
                        </div>
                    </div>
                    <div class="advantages__item">
                        <div class="advantages__labels">
                            <img src="icon/advantages/6.png" alt="" class="advantages__icon">
                            <div class="advantages__item-label">Безупречное качество</div>
                            <img src="icon/advantages/icon.png" alt="" class="advantages__arrow">
                        </div>
                        <div class="advantages__text">
                            В своей жизни видела много обоев, и качество было очень разным.
                            Летом столкнулась с этим магазином, решила делать ремонт в своей спальне. Обои выбрала -
                            полевые цветы. Очень и очень довольна я качеством!
                            Менеджер подобрал именно то, что я хотела, со сроками не затянул. Можно сказать сработали
                            четко. Абсолютна согласна, что обои стоят своих денег
                        </div>
                    </div>
                    <div class="advantages__item">
                        <div class="advantages__labels">
                            <img src="icon/advantages/7.png" alt="" class="advantages__icon">
                            <div class="advantages__item-label">Безопасность</div>
                            <img src="icon/advantages/icon.png" alt="" class="advantages__arrow">
                        </div>
                        <div class="advantages__text">
                            В своей жизни видела много обоев, и качество было очень разным.
                            Летом столкнулась с этим магазином, решила делать ремонт в своей спальне. Обои выбрала -
                            полевые цветы. Очень и очень довольна я качеством!
                            Менеджер подобрал именно то, что я хотела, со сроками не затянул. Можно сказать сработали
                            четко. Абсолютна согласна, что обои стоят своих денег
                        </div>
                    </div>
                    <div class="advantages__item">
                        <div class="advantages__labels">
                            <img src="icon/advantages/8.png" alt="" class="advantages__icon">
                            <div class="advantages__item-label">Уникальность</div>
                            <img src="icon/advantages/icon.png" alt="" class="advantages__arrow">
                        </div>
                        <div class="advantages__text">
                            В своей жизни видела много обоев, и качество было очень разным.
                            Летом столкнулась с этим магазином, решила делать ремонт в своей спальне. Обои выбрала -
                            полевые цветы. Очень и очень довольна я качеством!
                            Менеджер подобрал именно то, что я хотела, со сроками не затянул. Можно сказать сработали
                            четко. Абсолютна согласна, что обои стоят своих денег
                        </div>
                    </div>
                    <div class="advantages__item">
                        <div class="advantages__labels">
                            <img src="icon/advantages/1.png" alt="" class="advantages__icon">
                            <div class="advantages__item-label">Простота</div>
                            <img src="icon/advantages/icon.png" alt="" class="advantages__arrow">
                        </div>
                        <div class="advantages__text">
                            В своей жизни видела много обоев, и качество было очень разным.
                            Летом столкнулась с этим магазином, решила делать ремонт в своей спальне. Обои выбрала -
                            полевые цветы. Очень и очень довольна я качеством!
                            Менеджер подобрал именно то, что я хотела, со сроками не затянул. Можно сказать сработали
                            четко. Абсолютна согласна, что обои стоят своих денег
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
<footer class="footer">

    <div class="container">
        <div class="footer__wrapper">
            <div class="footer-menu">
                <div class="footer-menu__column">
                    <div class="footer-menu__item">
                        <a class="footer-menu__label">
                            Обои
                        </a>
                        <div class="footer-menu__sublist">
                            <a href="" class="footer-menu__sublist-link">Цветы </a>
                            <a href="" class="footer-menu__sublist-link">Горы</a>
                            <a href="" class="footer-menu__sublist-link">Детские</a>
                            <a href="" class="footer-menu__sublist-link">Акварель</a>
                            <a href="" class="footer-menu__sublist-link">Геометрия</a>
                            <a href="" class="footer-menu__sublist-link">Градиенты</a>
                            <a href="" class="footer-menu__sublist-link">Модерн</a>
                            <a href="" class="footer-menu__sublist-link">Этника</a>
                            <a href="" class="footer-menu__sublist-link">Классика</a>
                            <a href="" class="footer-menu__sublist-link">Раскаски</a>
                            <a href="" class="footer-menu__sublist-link">Природа</a>
                        </div>

                    </div>
                </div>
                <div class="footer-menu__column">
                    <div class="footer-menu__item">
                        <a class="footer-menu__label">
                            Плитка
                        </a>
                        <div class="footer-menu__sublist">
                            <a href="" class="footer-menu__sublist-link">Красная </a>
                            <a href="" class="footer-menu__sublist-link">Не очень красная</a>
                            <a href="" class="footer-menu__sublist-link">Почти не красная</a>
                            <a href="" class="footer-menu__sublist-link">Возможно красная</a>

                        </div>
                    </div>
                    <div class="footer-menu__item">
                        <a class="footer-menu__label">
                            Картины
                        </a>
                        <div class="footer-menu__sublist">
                            <a href="" class="footer-menu__sublist-link">Квадратные картины </a>
                            <a href="" class="footer-menu__sublist-link">Не Квадратные картины</a>

                        </div>
                    </div>
                </div>
                <div class="footer-menu__column">
                    <div class="footer-menu__item">
                        <a class="footer-menu__label">
                            Краска
                        </a>
                        <div class="footer-menu__sublist">
                            <a href="" class="footer-menu__sublist-link">Для стен </a>
                            <a href="" class="footer-menu__sublist-link">Не для стен</a>
                            <a href="" class="footer-menu__sublist-link">Для потолка</a>
                            <a href="" class="footer-menu__sublist-link">Для пола</a>

                        </div>
                    </div>
                </div>
                <div class="footer-menu__column">
                    <div class="footer-menu__item">
                        <a class="footer-menu__label">
                            Телепорт в нарнию
                        </a>
                        <div class="footer-menu__sublist">
                            <a href="" class="footer-menu__sublist-link">Ну поехали</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-info">
                <div class="footer-info__item">
                    <a class="footer-info__label">
                        Компаниям
                    </a>
                    <div class="footer-info__sublist">
                        <a href="" class="footer-info__sublist-link">О нас</a>
                        <a href="" class="footer-info__sublist-link">Оплата и доставка</a>
                        <a href="" class="footer-info__sublist-link"> Наш шоурум</a>
                        <a href="" class="footer-info__sublist-link"> Где купить</a>
                        <a href="" class="footer-info__sublist-link"> Контакты</a>
                        <a href="" class="footer-info__sublist-link"> Портфолио</a>

                    </div>
                </div>
            </div>
            <div class="footer-contacts">
                <a class="footer-contacts__label">Контакты</a>
                <div class="footer-contacts__main">
                    <div class="footer-contacts__item">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_318)">
                                <path d="M11.8547 9.29201C11.5476 8.97226 11.1772 8.8013 10.7846 8.8013C10.3952 8.8013 10.0217 8.96909 9.7019 9.28884L8.70149 10.2861C8.61918 10.2418 8.53687 10.2006 8.45772 10.1595C8.34375 10.1025 8.23611 10.0486 8.1443 9.99166C7.20721 9.39648 6.3556 8.62085 5.53881 7.61727C5.14308 7.11707 4.87714 6.69601 4.68403 6.26862C4.94363 6.03118 5.18423 5.78424 5.41851 5.54681C5.50715 5.45816 5.59579 5.36635 5.68444 5.27771C6.34927 4.61288 6.34927 3.75177 5.68444 3.08694L4.82016 2.22266C4.72202 2.12452 4.62071 2.02321 4.52573 1.9219C4.33578 1.72562 4.13633 1.52301 3.93055 1.33306C3.62347 1.02913 3.25623 0.867676 2.86999 0.867676C2.48376 0.867676 2.11019 1.02913 1.7936 1.33306C1.79044 1.33622 1.79044 1.33622 1.78727 1.33939L0.710881 2.42528C0.305652 2.8305 0.0745449 3.32438 0.0238913 3.8974C-0.0520892 4.82183 0.220174 5.68294 0.42912 6.24646C0.941989 7.62994 1.70813 8.91211 2.851 10.2861C4.23764 11.9418 5.90605 13.2493 7.81189 14.1706C8.54004 14.5157 9.51195 14.9241 10.5978 14.9937C10.6643 14.9969 10.734 15 10.7973 15C11.5286 15 12.1428 14.7373 12.624 14.2149C12.6272 14.2086 12.6335 14.2054 12.6367 14.1991C12.8013 13.9996 12.9912 13.8192 13.1907 13.6261C13.3268 13.4963 13.4661 13.3601 13.6022 13.2177C13.9157 12.8916 14.0803 12.5117 14.0803 12.1223C14.0803 11.7297 13.9125 11.353 13.5927 11.0364L11.8547 9.29201ZM12.9881 12.6257C12.9849 12.6257 12.9849 12.6288 12.9881 12.6257C12.8646 12.7586 12.738 12.8789 12.6018 13.0119C12.396 13.2082 12.1871 13.4139 11.9908 13.6451C11.6711 13.987 11.2943 14.1484 10.8005 14.1484C10.753 14.1484 10.7023 14.1484 10.6548 14.1453C9.71457 14.0851 8.84079 13.7179 8.18546 13.4045C6.39359 12.537 4.82016 11.3055 3.51266 9.74473C2.43311 8.44356 1.71129 7.24054 1.23325 5.94887C0.938823 5.16057 0.831184 4.5464 0.878672 3.96705C0.91033 3.59664 1.05279 3.28955 1.31556 3.02679L2.39512 1.94723C2.55024 1.8016 2.71487 1.72246 2.87632 1.72246C3.07577 1.72246 3.23723 1.84276 3.33854 1.94407C3.34171 1.94723 3.34487 1.9504 3.34804 1.95356C3.54115 2.13402 3.72477 2.3208 3.91789 2.52025C4.01603 2.62156 4.11734 2.72287 4.21865 2.82734L5.08292 3.69162C5.4185 4.0272 5.4185 4.33745 5.08292 4.67303C4.99111 4.76484 4.90247 4.85665 4.81066 4.94529C4.54473 5.21756 4.29146 5.47083 4.01603 5.71776C4.0097 5.72409 4.00337 5.72726 4.0002 5.73359C3.72794 6.00585 3.77859 6.27179 3.83558 6.45224C3.83874 6.46174 3.84191 6.47123 3.84508 6.48073C4.06985 7.02526 4.38644 7.53813 4.86765 8.14914L4.87081 8.1523C5.74459 9.22869 6.66585 10.0676 7.68209 10.7103C7.81189 10.7926 7.94486 10.8591 8.07149 10.9224C8.18546 10.9794 8.2931 11.0332 8.38491 11.0902C8.39757 11.0965 8.41024 11.106 8.4229 11.1124C8.53054 11.1662 8.63185 11.1915 8.73632 11.1915C8.99908 11.1915 9.16371 11.0269 9.21753 10.9731L10.3003 9.89036C10.4079 9.78272 10.5788 9.65292 10.7783 9.65292C10.9746 9.65292 11.136 9.77638 11.2342 9.88402C11.2373 9.88719 11.2373 9.88719 11.2405 9.89036L12.9849 11.6347C13.311 11.9577 13.311 12.2901 12.9881 12.6257Z"
                                      fill="#CA3192"/>
                                <path d="M8.10631 3.56805C8.93577 3.70735 9.68925 4.09992 10.2908 4.70143C10.8923 5.30294 11.2817 6.05641 11.4241 6.88587C11.459 7.09481 11.6394 7.24044 11.8452 7.24044C11.8705 7.24044 11.8927 7.23728 11.918 7.23411C12.1523 7.19612 12.3074 6.97451 12.2694 6.74024C12.0985 5.73666 11.6236 4.82173 10.8986 4.09675C10.1736 3.37177 9.25869 2.89689 8.25511 2.72594C8.02084 2.68795 7.80239 2.84307 7.76124 3.07418C7.72008 3.30529 7.87204 3.53006 8.10631 3.56805Z"
                                      fill="#CA3192"/>
                                <path d="M14.9826 6.61682C14.7008 4.96424 13.922 3.46046 12.7253 2.26377C11.5286 1.06708 10.0248 0.288277 8.37225 0.00651579C8.14114 -0.0346403 7.9227 0.123652 7.88154 0.35476C7.84355 0.589033 7.99868 0.807477 8.23295 0.848633C9.70824 1.09873 11.0537 1.79839 12.1238 2.86528C13.1938 3.93534 13.8903 5.28083 14.1404 6.75611C14.1753 6.96506 14.3557 7.11069 14.5615 7.11069C14.5868 7.11069 14.609 7.10752 14.6343 7.10436C14.8654 7.06953 15.0237 6.84792 14.9826 6.61682Z"
                                      fill="#CA3192"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_1_318">
                                    <rect width="15" height="15" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>

                        <a href="mailto:welcome@re-space.ru">welcome@re-space.ru</a>
                    </div>
                    <div class="footer-contacts__item">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.4803 2.56234C14.3011 2.38313 14.086 2.25768 13.853 2.16807C13.853 2.16807 13.853 2.16807 13.8351 2.16807C13.7814 2.15015 13.7276 2.13223 13.6738 2.11431C13.6559 2.11431 13.6559 2.11431 13.638 2.11431C13.5842 2.09639 13.5305 2.09639 13.4767 2.07847C13.4588 2.07847 13.4409 2.07847 13.4409 2.07847C13.3692 2.07847 13.3154 2.06055 13.2437 2.06055H1.77419C1.70251 2.06055 1.64875 2.06055 1.57706 2.07847C1.55914 2.07847 1.54122 2.07847 1.54122 2.07847C1.48746 2.07847 1.43369 2.09639 1.37993 2.11431C1.36201 2.11431 1.36201 2.11431 1.34409 2.11431C1.29032 2.13223 1.23656 2.15015 1.1828 2.16807C1.1828 2.16807 1.1828 2.16807 1.16487 2.16807C0.9319 2.25768 0.716846 2.40105 0.537634 2.56234C0.519713 2.56234 0.519713 2.58026 0.501792 2.59818C0.483871 2.6161 0.46595 2.63402 0.448029 2.65194C0.430108 2.68779 0.394265 2.70571 0.376344 2.74155C0.358423 2.75947 0.358423 2.75947 0.340502 2.77739C0.340502 2.77739 0.340502 2.79531 0.322581 2.79531C0.125448 3.08205 0 3.42255 0 3.7989V11.1824C0 11.6484 0.179211 12.0785 0.483871 12.3831C0.483871 12.4011 0.501792 12.4011 0.501792 12.419C0.824373 12.7416 1.25448 12.9387 1.73835 12.9387H13.2437C13.7276 12.9387 14.1577 12.7416 14.4803 12.419C14.8029 12.0964 15 11.6663 15 11.1824V3.7989C15 3.31503 14.8029 2.88492 14.4803 2.56234ZM1.59498 2.97453C1.64875 2.9566 1.70251 2.9566 1.75627 2.9566H13.2437C13.2975 2.9566 13.3513 2.9566 13.405 2.97453C13.4588 2.99245 13.5125 3.01037 13.5663 3.02829L10.8602 5.25051L7.83154 7.70571L7.81362 7.72363C7.72401 7.79532 7.61649 7.83116 7.50896 7.83116C7.40143 7.83116 7.29391 7.79532 7.2043 7.72363L4.15771 5.25051L1.43369 3.02829C1.48746 3.01037 1.54122 2.99245 1.59498 2.97453ZM14.086 11.1824C14.086 11.4154 13.9964 11.6125 13.8351 11.7738C13.6918 11.9172 13.4767 12.0247 13.2437 12.0247H1.77419C1.54122 12.0247 1.34409 11.9351 1.1828 11.7738L1.16487 11.7559C1.02151 11.6125 0.9319 11.4154 0.9319 11.1824V3.81682L3.58423 5.96736L5.2509 7.32937L2.63441 9.82041C2.4552 9.99962 2.43728 10.2864 2.61649 10.4656C2.7957 10.6448 3.08244 10.6627 3.26165 10.4835L5.96774 7.90284L6.63083 8.44048C6.89964 8.65553 7.2043 8.76306 7.50896 8.74514C7.83154 8.74514 8.1362 8.63761 8.3871 8.42256L8.40502 8.40464L9.05018 7.88492L11.7742 10.4835C11.9534 10.6627 12.2401 10.6448 12.4194 10.4656C12.5986 10.2864 12.5806 9.99962 12.4014 9.82041L9.76703 7.31144L11.4337 5.96736L14.086 3.81682V11.1824Z"
                                  fill="#CA3192"/>
                        </svg>
                        <a href="tel:+78003508415">8 800 350 84 15</a>
                    </div>
                </div>
                <div class="menu-social menu-social_footer">
                    <a href="" class="menu-social__item">
                        <img src="./icon/social/instagram.svg" alt="" class="menu-social__image">
                    </a>
                    <a href="" class="menu-social__item">
                        <img src="./icon/social/facebook.svg" alt="" class="menu-social__image">
                    </a>
                    <a href="" class="menu-social__item">
                        <img src="./icon/social/twitter.svg" alt="" class="menu-social__image">
                    </a>
                    <a href="" class="menu-social__item">
                        <img src="./icon/social/pinterest.svg" alt="" class="menu-social__image">
                    </a>
                    <a href="" class="menu-social__item">
                        <img src="./icon/social/youtube.svg" alt="" class="menu-social__image">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <button class="button-up">
        <svg width="30" height="17" viewBox="0 0 30 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14.1769 0.337994L0.32404 14.1908C-0.118872 14.6494 -0.106155 15.3802 0.352449 15.8231C0.799824 16.2552
            1.50904 16.2552 1.95634 15.8231L14.993 2.78645L28.0297 15.8231C28.4804 16.2738 29.2112 16.2738 29.662 15.8231C30.1127
            15.3723 30.1127 14.6416 29.662 14.1908L15.8092 0.337994C15.3583 -0.112696 14.6276 -0.112696 14.1769 0.337994Z"
                  fill="white"/>
        </svg>

    </button>

</footer>
</body>
</html>