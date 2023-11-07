<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="../css/auth.css">
    <title>auth</title>
</head>

</style>
<body>
    <main>
        <form action="login.php" method="post">
            <h1>Войти</h1><br>
            <input type="text" name="email" placeholder="логин" autocomplete="on"><br>
            <input type="password" name="pass" placeholder="пароль" autocomplete="on"><br>
            <input type="submit" value="Войти">
        </form>
    </main>
</body>
</html>