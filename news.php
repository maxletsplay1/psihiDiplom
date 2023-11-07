<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
</head>
<?
require "../header.php";
?>

<style>
        .card-img-top{
            height: 530px;
            width: 418px;
            border-radius: 30px;
            border-bottom-left-radius:0px;
            border-bottom-right-radius: 0px;
        }
        .card{
            margin-top: 10px;
            margin-bottom: 20px;
            height: 670px;
            width: 420px;
            border-radius: 30px;

        }
        .wrapper{
            margin-top: 40px;
            display: flex;
            justify-content: space-around;
            min-width: 1400px;
            max-width: 1900px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }
        .pagination{
            margin-top: 40px;
            display: flex;
            justify-content: space-around;
            margin-bottom: 40px;
            
        }
        .da{
          font-size: 40pt;
          margin-top: 30px;
          text-align: center;
        }
        #but:hover{
          color: white;
          background-color: #12bee0;
        }
        #but{
            min-width: 200px;
          color: white;
          background-color: #0D88A1;
          border: none;
          border-radius: 15px;
        }
</style>

<p class="da">НОВОСТИ</p>
<?
        require "../serv/db.php";
        $quaryPG = "SELECT COUNT(*) FROM `news`";
        $allpg = mysqli_query($db, $quaryPG);
        $allpg = mysqli_fetch_all($allpg);
        foreach ($allpg as $pg);
        if($pg[0] <= 0){?>
            <h1>ТУТ ПОКА НЕТ НОВОСТЕЙ :(</h1>
       <? }
        elseif($pg[0]>0){?>
          
            <div class="wrapper">
            <?
            $page = isset($_GET['page']) ? $_GET['page']: 1;
            if($page <= 0){
                echo "<script>window.location.href='/news/news?page=1'</script>";
                // header('Locstion:/newsco?page=1');
            }
            $limit = 3;
            $offset= $limit * ($page - 1);
            
            require "../serv/db.php";
            $quaryAll = "SELECT * FROM `news` ORDER BY `id` DESC LIMIT $limit OFFSET $offset";
            $all = mysqli_query($db, $quaryAll);
            $all = mysqli_fetch_all($all);
            foreach ($all as $item){
            ?>
        
            <div class="card">
                <img src="<?=$item[3]?>" class="card-img-top" alt="" srcset="">
                <div class="card-body">
                    <h5 class="card-title"><?=$item[2]?></h5>
                    <p class="card-text"><?=$item[1]?></p>
                </div>
                <a href="/news/newspage?id=<?=$item[0]?>" id="but" class="btn btn-primary active" role="button">открыть</a>
            </div>
            <?
                }
            ?>  
        </div>
        
        
        <div class="pagination">
            <?
                require "../serv/db.php";
                $quaryPG = "SELECT COUNT(*) FROM `news`";
                $allpg = mysqli_query($db, $quaryPG);
                $allpg = mysqli_fetch_all($allpg);
                foreach ($allpg as $pg)
            ?>
            <? 
                if ($page == 1){
                    $prbtn = "disabled";
                }
                else{
                    $prbtn = "active";
                }
            ?>
            <?
                 if($page == $pg[0]/$limit){
                    $nxdbtn ="disabled";
                }
                elseif($page > $pg[0]/$limit){
                    $nxdbtn ="disabled";
                }
                else{
                    $nxdbtn = "active";
                }
            ?>
            <?     
                if($page > ceil($pg[0]/$limit)){
                    echo "<script>window.location.href='/news/news'</script>";
                }
            ?>
                <a href="/news/news?page=<?=$page-1?>" class="btn btn-primary <?=$prbtn?>" id="but" role="button">предыдущая</a>
                <a href="/news/news?page=<?=$page+1?>" class="btn btn-primary <?=$nxdbtn?>" id="but" role="button">следующая</a>
        </div>
        


        <?}
?>
<?
    require "../pages/footer.php";
?>




</html>
