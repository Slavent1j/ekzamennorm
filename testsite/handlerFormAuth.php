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
      echo 'Успешное соединение <br>';
}

$auth = 0;
$sql = "SELECT * FROM user";
if($result = $link->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    foreach($result as $row){
        if($row["login"] == $_POST["Login"] and $row["password"] == $_POST["Password"]){
            $auth = 1;
        }
    }
    $result->free();
} else{
    echo "Ошибка: " . $link->error;
}
$link->close();

if($auth == 1){
    echo 'Авторизация завершена успешно';
} else {
    echo 'Авторизация не удалась';
}

?>