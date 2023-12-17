<?php
require "../serv/db.php";
error_reporting(0);

$id = $_GET['id']; // Получите ID записи, которую вы хотите обновить, либо из формы, либо из другого источника.


$name1 = $_POST["head1"];
$vst = $_POST["vst"];
$text = $_POST["text"];
$pic1def = $_POST["pic1def"];
$pic2def = $_POST["pic2def"];



// Проверка наличия данных в $_FILES['pic1']
if (isset($_FILES['pic1']) && $_FILES['pic1']['error'] === UPLOAD_ERR_OK) {
    $file1 = $_FILES['pic1'];
    $fileName1 = time() . $file1['name'];
    $path1 = '../uploads/' . '_' . $fileName1;
    move_uploaded_file($file1['tmp_name'], $path1);
    unlink($pic1def);
} else {
    $path1 = $pic1def;
}

// Проверка наличия данных в $_FILES['pic2']
if (isset($_FILES['pic2']) && $_FILES['pic2']['error'] === UPLOAD_ERR_OK) {
    $file2 = $_FILES['pic2'];
    $fileName2 = time() . $file2['name'];
    $path2 = '../uploads/' . '_' . $fileName2;
    move_uploaded_file($file2['tmp_name'], $path2);
    unlink($pic2def);
} else {
    $path2 = $pic2def;
}

echo "$pic2def";
echo "$pic1def";



// Обновление таблицы newspage
$updateNewspage = "UPDATE `newspage` SET `vstavka`='$vst', `header`='$name1', `text`='$text', `pic1`='$path1', `pic2`='$path2' WHERE `id`='$id'";
$updateNewspageQuery = mysqli_query($db, $updateNewspage);
$updateNewspage = "UPDATE `news` SET `header`='$name1' WHERE `id`='$id'";
$updateNewspageQuery = mysqli_query($db, $updateNewspage);
header('Location:../admpanel/panel');
