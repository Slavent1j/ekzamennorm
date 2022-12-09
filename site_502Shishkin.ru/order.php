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

if (isset($_POST["name"])) {
    //Вставляем данные, подставляя их в запрос
    $sql = mysqli_query($link, "INSERT INTO `orders` (`id`, `name`, `price`, `amount`, `FIO`, `number`, `email`, `adress`) VALUES (NULL, '{$_POST['Name']}', '{$_POST['Price']}', '{$_POST['Amount']}', '{$_POST['FIO']}', '{$_POST['Number']}', '{$_POST['Email']}', '{$_POST['Adress']}')");
    //Если вставка прошла успешно
    if ($sql) {
      echo '<p>Данные успешно добавлены в таблицу.</p>';
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
  }

$link->close();


?>
