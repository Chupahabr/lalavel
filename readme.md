Разворачиваем пустой проект.
Заходим в консоль контейнера php-laravel и прописываем команды:
```
cd /var/www
composer create-project laravel/laravel laravel
```
Or
```
docker run --rm --volume ${pwd}/www:/var/www laravel-test_php-fpm composer create-project laravel/laravel laravel
```

Устанавливем breezee (доп модуль для системы авторизации/регистрации)
```
cd /var/www/laravel
composer require laravel/breeze --dev
php artisan breeze:install vue --ssr --dark
```
Or
```
docker run --rm --volume ${pwd}/www:/var/www/laravel laravel-test_php-fpm composer require laravel/breeze --dev
docker run --rm --volume ${pwd}/www:/var/www/laravel laravel-test_php-fpm php artisan breeze:install vue --ssr --dark
```

Делаем миграции
```
cd /var/www/laravel
php artisan migrate
```

----------------------------------

Собираем фронт
```
docker run --rm --volume ${pwd}/www:/var/www/laravel laravel-test_node npm install
docker run --rm --volume ${pwd}/www:/var/www/laravel laravel-test_node npm run build
```


Готово, каркас сайта работает (http://localhost:44/)

https://orchid.software/ru/docs