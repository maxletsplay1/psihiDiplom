<? session_start();
if (isset($_SESSION['user']['role']) == false) {
    header('Location:../');
} elseif ($_SESSION['user']['role'] == 'admin') {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/auth.css">
        <title>админпанель</title>
    </head>

    <body>

        <form action="addcard.php" enctype="multipart/form-data" method="post">
            <center>
                <h1>Содержимое карточки</h1>

                <input type="text" name="head" placeholder="заголовок" required>

                <input type="file" name="pic" required><br>
                <h1>Содержимое поста</h1>
                <input type="text" name="head1" placeholder="заголовок в новости" required>
                <input type="text" name="vst" placeholder="вставка видео с rutube">
                <input type="text" name="text" placeholder="текст новости" required>


                <input type="file" name="pic1">
                <input type="file" name="pic2">
                <br>
                <input type="submit" name="send">
            </center>
        </form>

        <form action="delete.php" method="post">
            <center>
                <h1>Удаление новостей</h1>
            </center>
            <?
            require "../serv/db.php";
            $quaryAll = "SELECT * FROM `news` ORDER BY `id`";
            $all = mysqli_query($db, $quaryAll);
            $all = mysqli_fetch_all($all);
            foreach ($all as $item) {
            ?>

                <div class="delete" style="border: 2px solid;">
                    <center>
                        <h2>Название: <b><?= $item[2] ?></b></h2>
                        <h3><a href="/admpanel/delete.php?id=<?= $item[0] ?>">удалить</a></h3>
                    </center>
                </div>
                <br>
            <?
            }
            ?>
        </form>

        <form method="post">
            <input type="submit" name="test" id="test" value="Выйти" />
        </form>
        <?
        function testfun()
        {
            session_destroy();
            header('Location:../');
        }

        if (array_key_exists('test', $_POST)) {
            testfun();
        }
        ?>
    <?
} else {
    header('Location:../');
}
    ?>

    </body>

    </html>