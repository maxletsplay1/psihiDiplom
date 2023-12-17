<? session_start();
if (isset($_SESSION['user']['role']) == false) {
    header('Location:../');
} elseif ($_SESSION['user']['role'] == 'admin') {

?>
    <!DOCTYPE html>
    <html lang="en">
    <style>

    </style>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/auth.css">
        <title>админпанель</title>
    </head>
    <style>
        body {
            text-align: center;
        }
    </style>
    <?
    require "../serv/db.php";
    $id = $_GET['id'];
    $quaryAll = "SELECT * FROM `newspage` WHERE `id` = '$id' ";
    $all = mysqli_query($db, $quaryAll);
    $all = mysqli_fetch_all($all);
    foreach ($all as $item) { ?>

        <body>
            <h1>Редактирование новости</h1>
            <form action="editcard.php?id=<? echo "$id" ?>" enctype="multipart/form-data" method="post">
                <center>
                    <h1>Содержимое новости</h1>
                    <input type="text" name="head1" placeholder="заголовок в новости" required value="<?= $item[1] ?>">
                    <input type="text" name="vst" placeholder="вставка видео с rutube " value="<?= $item[0] ?>">
                    <textarea name="text" id="" cols="30" rows="10"><?= $item[2] ?></textarea>



                    <input type="file" name="pic1">
                    <input type="file" name="pic2">
                    <input type="hidden" name="pic1def" value="<?= $item[3] ?>">
                    <input type="hidden" name="pic2def" value="<?= $item[4] ?>">
                    <br>
                    <input type="submit" name="send" value="Сохранить">
                </center>
            </form>
        <? } ?>


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