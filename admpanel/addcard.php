<? session_start();
if (isset($_SESSION['user']['role']) == false) {
    header('Location:../');
} elseif ($_SESSION['user']['role'] == 'admin') {


    require "../serv/db.php";

    $quaryPG = "SELECT COUNT(*) FROM `news`";
    $allpg = mysqli_query($db, $quaryPG);
    $allpg = mysqli_fetch_all($allpg);
    foreach ($allpg as $pg);
    $newid = ++$pg[0];




    $name = $_POST["head"];
    $link = $newid;
    $date = date('Y-m-d H:i:s');
    $name1 = $_POST["head1"];
    $vst = $_POST["vst"];
    $text = $_POST["text"];





    $file = $_FILES['pic'];
    $fileName = time() . $file['name'];
    $path = '../uploads/' . '_' . $fileName;
    move_uploaded_file($file['tmp_name'], $path);
    $file1 = $_FILES['pic1'];
    $fileName1 = time() . $file1['name'];
    $path1 = '../uploads/' . '_' . $fileName1;
    move_uploaded_file($file1['tmp_name'], $path1);
    $file2 = $_FILES['pic2'];
    $fileName2 = time() . $file2['name'];
    $path2 = '../uploads/' . '_' . $fileName2;
    move_uploaded_file($file2['tmp_name'], $path2);

    $addpost = "INSERT INTO `news`(`id`,`date`,`header`,`pic`,`link`) VALUES('$newid', '$date', '$name', '$path', '$link')";
    $add = mysqli_query($db, $addpost);
    $queryaddnews = "INSERT INTO `newspage`(`vstavka`, `header`, `text`, `pic1`, `pic2`,`id`) VALUES('$vst','$name1','$text','$path1','$path2','$newid')";
    $add1 = mysqli_query($db, $queryaddnews);

    header('Location:../admpanel/panel');
}
    //я отказываюсь это комментировать    
