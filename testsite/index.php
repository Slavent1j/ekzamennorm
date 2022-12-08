<!DOCTYPE html>
<html>
<head>
<title>METANsefsefsefT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<h3>Регистрация</h3>
<form action="handlerForm.php" method="POST">
    <p>Имя: <input type="text" name="Name" /></p>
    <p>Логин: <input type="text" name="Login" /></p>
    <p>Пароль: <input type="text" name="Password" /></p>
    <input type="submit" value="Отправить">
</form>
<br>
<h3>Авторизация</h3>
<form action="handlerFormAuth.php" method="POST">
    <p>Логин: <input type="text" name="Login" /></p>
    <p>Пароль: <input type="text" name="Password" /></p>
    <input type="submit" value="Отправить">
</form>
    <br>
    <?php
        require 'view.php';
    ?>
</body>
</html>