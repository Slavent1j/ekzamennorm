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

$sql = "SELECT * FROM orders";
if($result = $link->query($sql)){
    $rowsCount = $result->num_rows;
    foreach($result as $row){
        echo $row["name"] . "" . $row["price"] . " " . $row["amount"] . " " . $row["FIO"] . " " . $row["number"] . " " . $row["email"] . " " . $row["adress"]  "<br>";
    }
    $result->free();
} else{
    echo "Ошибка" . $link->error;
}
$link->close();


?>
