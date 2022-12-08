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
      echo 'Найс соединение';
}

$sql = "SELECT * FROM favorites";
if($result = $link->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Получено объектов: $rowsCount</p>";
    echo "<table><tr><th>Имя</th><th>Еда</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["nickname"] . "</td>";
            echo "<td>" . $row["favoritemeal"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $link->error;
}
$link->close();

?>