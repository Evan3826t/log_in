<?php
include('base.php');
$id =  $_GET['id'];
$sql = "delete from user where id='$id'";
$pdo->exec($sql);

header("location:user_list.php");

?>