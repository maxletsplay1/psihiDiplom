<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
</head>
<? require "./header.php";
error_reporting(0)
?>

<style>
    .card-img-top {
        max-width: 600px;
        max-height: 400px;
        border: 0;
        border-radius: 7px;
    }

    .pic {
        margin-top: 40px;
        display: flex;
        justify-content: space-between;
        margin-bottom: 40px;
    }

    #but:hover {
        color: white;
        background-color: #12bee0;
    }

    #but {
        border-radius: 15px;
        color: white;
        background-color: #0D88A1;
        border: none;
        margin-bottom: 40px;
    }

    .da {
        font-size: 40pt;
        margin-top: 20px;
        text-align: center;
    }

    .newstext {
        max-width: 1400px;
        font-size: 20pt;
        text-align: justify;
    }

    .block {
        min-width: 1400px;
        max-width: 1900px;
        margin: auto;
    }
</style>

<?

require "./serv/db.php";
$id = $_GET['id'];
$quaryAll = "SELECT * FROM `newspage` WHERE `id` = '$id' ";
$all = mysqli_query($db, $quaryAll);
$all = mysqli_fetch_all($all);
foreach ($all as $item) {
?>

    <div class="block">
        <p class="da"><?= $item[1] ?></p>
        <h5 class="newstext"><?= $item[2] ?></h5>
        <div class="pic">
            <img src="<?= $item[3] ?>" class="card-img-top" alt="" srcset="">
            <img src="<?= $item[4] ?>" class="card-img-top" alt="" srcset="">
        </div>
        <center>
            <span>
                <? echo $item[0]; ?>
            </span>
        </center>
    </div>
    <center>


    <?

}
    ?>
    <a href="/news.php" id="but" class="btn btn-primary active" role="button">назад</a>
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
    if ($id <= 0) {
        echo "<script>window.location.href='/news/news?page=1'</script>";
        // header('Locstion:/newsco?page=1');
    } elseif ($id > $pg[0]) {
        echo "<script>window.location.href='/news/news?page=1'</script>";
    }
    ?>

</html>