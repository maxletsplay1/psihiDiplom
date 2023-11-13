<!DOCTYPE html>
<html lang="ru">
<?
require "./serv/db.php";
$id = $_GET['id'];
$quaryAll = "SELECT * FROM `newspage` WHERE `id` = '$id' ";
$all = mysqli_query($db, $quaryAll);
$all = mysqli_fetch_all($all);
foreach ($all as $item) {
?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Новости | <?= $item[1] ?></title>
    </head>
    <? require "./header.php";
    error_reporting(0)
    ?>

    <style>
        #carouselExampleIndicators {
            margin-bottom: 20px;
        }

        #video,
        .video,
        iframe {
            margin-bottom: 20px;
            max-width: 94vw !important;
        }


        .container {
            max-width: 100vw !important;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #news {
            max-width: 100vw !important;
        }
    </style>



    <div class="container" id="news">
        <p class="word-wrap text-center fs-1 mt-4 py-0 text-uppercase"><?= $item[1] ?></p>
        <p class="word-wrap fs-5 mt-4 w-100 rounded" id="warning"><?= $item[2] ?></p>
        <div id="carouselExampleIndicators" class="carousel slide rounded" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= $item[3] ?>" class="d-block mw-100 rounded" id="image" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= $item[4] ?>" class="d-block mw-100 rounded" id="image" alt="...">
                </div>
            </div>
        </div>
        <div class="video" id="video">
            <? echo $item[0]; ?>
        </div>
    </div>



<?

}
?>
<center>
    <a href="/news.php" class="buttuon fs-4 text-uppercase rounded-pill p-2 my-4 text-decoration-none" style="background-color: #0B87BA; color: white;" role="button" id="button">назад</a>
</center>

<?
require "./footer.php"
?>
<?
require "./serv/db.php";
$quaryPG = "SELECT COUNT(*) FROM `news`";
$allpg = mysqli_query($db, $quaryPG);
$allpg = mysqli_fetch_all($allpg);
foreach ($allpg as $pg);
echo ($pg[0]);
if ($id <= 0) {
    echo "<script>window.location.href='/news?page=1'</script>";
    // header('Locstion:/newsco?page=1');
}
// elseif ($id > $pg[0]) {
//     echo "<script>window.location.href='/news/news?page=1'</script>";
// }
?>

</html>