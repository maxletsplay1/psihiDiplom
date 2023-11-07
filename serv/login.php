<?php
    session_start();
    require "db.php";

    $email = $_POST["email"]; //берем из инпута
    $pass = $_POST["pass"];

    $querryUser="SELECT * FROM `user` WHERE `user`.`email`= '$email'"; //берет из дб
    $user=mysqli_query($db,$querryUser);
    $user=mysqli_fetch_assoc($user); //массив создает

    if($user["pass"] == $pass) {
        $_SESSION['user'] = [
            "id" => $user['id'],
            "email" => $user['email'],
            "role" => $user['role']
        ]; //создание сессии пользователя
        $userid = $user["id"];
        header("Location:../admpanel/panel?id=$userid");
    } else {
        header("Location:/");
    }
?>