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

$auth = 0;
$sql = "SELECT * FROM users";
if($result = $link->query($sql)){
    $rowsCount = $result->num_rows;
    foreach($result as $row){
        if($row["login"] == $_POST["Login"] and $row["password"] == $_POST["Password"]){
            $auth = 1;
            }
    }
    $result->free();
} else{
    echo "Ошибка" . $link->error;
}
$link->close();
if($auth == 1){
    echo "Успешно<br>";
    require 'view.php';


} else {
echo "Не удалось";
}

?>
