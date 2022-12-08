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

$sql = "SELECT * FROM users";
if($result = $link->query($sql)){
    $rowsCount = $result->num_rows;
    foreach($result as $row){
        echo $row["login"] . " " . $row["password"] . "<br>";
    }
    $result->free();
} else{
    echo "Ошибка" . $link->error;
}
$link->close();


?>
