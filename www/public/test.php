<?php

/*$link = mysqli_connect('mysql-laravel:3306', 'laravel', 'laravelpasswd');
if (!$link) {
    die('Ошибка соединения: ' . mysqli_error());
}
echo 'Успешно соединились';*/
$con = new PDO('mysql:host=mysql-laravel', 'laravel', 'laravelpasswd');
$sql = 'SHOW databases';
$query = $con->query($sql);

while ($val = $query->fetch()) {
    var_dump($val);
}

//phpinfo();