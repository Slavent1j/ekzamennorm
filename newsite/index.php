<!DOCTYPE html>
<html>
<head>
<title>METANsefsefsefT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<h3>Анкета</h3>
<form action="handlerForm.php" method="POST">
    <p>Имя: <input type="text" name="Name" /></p>
    <p>Любимая еда: <input type="text" name="favoritemeal" /></p>
    <p>Любимый напиток: <input type="text" name="favoritedrink" /></p>
    <p>Любимое животное: <input type="text" name="favoriteanimal" /></p>
    <input type="submit" value="Сохранить">
</form>
<br>
    <?php
        require 'view.php';
    ?>
</body>
</html>