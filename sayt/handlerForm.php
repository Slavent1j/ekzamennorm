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

if (isset($_POST["Login"])) {
    //Вставляем данные, подставляя их в запрос
    $sql = mysqli_query($link, "INSERT INTO `users` (`id`, `login`, `password`) VALUES (NULL, '{$_POST['Login']}', '{$_POST['Password']}')");
    //Если вставка прошла успешно
    if ($sql) {
      echo '<p>Данные успешно добавлены в таблицу.</p>';
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
  }

$link->close();

?>