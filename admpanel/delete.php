<?session_start();
        if(isset($_SESSION['user']['role'])==false){
            header('Location:../');
        }
        elseif($_SESSION['user']['role']=='admin'){
?>
<?
    require "../serv/db.php";
    $id=$_GET['id'];
    $quaryAll = "SELECT * FROM `newspage` WHERE `id` = '$id' ";
    $all = mysqli_query($db, $quaryAll);
    $all = mysqli_fetch_all($all);
    foreach ($all as $item)
    //сбор данных с поста
?>
<?
    require "../serv/db.php";
    $quaryAll = "SELECT * FROM `news` WHERE `id` = '$id' ";
    $all = mysqli_query($db, $quaryAll);
    $all = mysqli_fetch_all($all);
    foreach ($all as $item1)
    //сбор данных с карточки
?>
<?
    require "../serv/db.php";
    $quaryDelete = "DELETE FROM `news` WHERE `news`.`id`='$id'";
    $delete = mysqli_query($db,$quaryDelete);
    $quaryDelete1 = "DELETE FROM `newspage` WHERE `newspage`.`id`='$id'";
    $delete1 = mysqli_query($db,$quaryDelete1);
    //удаление поста и карточки из бд

    unlink($item[3]);
    unlink($item[4]);
    unlink($item1[3]);
    //удаление фоток этому всему 
    header('Location:../admpanel/panel');
?>

<?
}
else{
    header('Location:../');
}
?>