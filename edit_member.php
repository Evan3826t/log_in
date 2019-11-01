<?php
include("base.php");
$name = $_POST['name'];
$addr = $_POST['addr'];
$tel = $_POST['tel'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];

$sql = "UPDATE `user` SET `name`='$name',`addr`='$addr',`tel`='$tel',`birthday`='$birthday',`email`='$email' WHERE `id`=". $_SESSION['id'];
$pdo->exec($sql);
echo "<a href='member_center.php'> 編輯完成，返回會員中心</a>";
// header("location:member_center.php");

?>