<?php
$user = 'root';
$password = 'root';
$db = 'users';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);

if (!$link) {
      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
      exit;
} else {
      echo 'Успешное соединение';
}

if (isset($_POST["Name"])) {
    //Вставляем данные, подставляя их в запрос
    $sql = mysqli_query($link, "INSERT INTO `favorites` (`nickname`, `favoritemeal`, `favoritedrink`, `favoriteanimal`) VALUES ('{$_POST['Name']}', '{$_POST['favoritemeal']}', '{$_POST['favoritedrink']}', '{$_POST['favoriteanimal']}')");
    //Если вставка прошла успешно
    if ($sql) {
      echo '<p>Данные успешно добавлены в таблицу.</p>';
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
  }

$link->close();

?>