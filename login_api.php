<?php
/***************************************************
 * 會員登入行為：
 * 1.建立連線資料庫的參數
 * 2.判斷是否有送來表單資料
 * 3.從資料庫取得資料
 * 4.比對表單資料和資料庫資料是否一致
 * 5.根據比對的結果決定畫面的行為
  ***************************************************/

include ("base.php");
$acc = $_POST['acc'];
$pw = $_POST['pw'];


// select * from user where acc='$acc' && pw='$pw' 回傳一堆資料
// select count(*) from user where acc='$acc' && pw='$pw' 回傳一個數字，速度比較快
$sql = "select * from user where acc='$acc' && pw='$pw'";

$data = $pdo->query($sql)->fetch(); //回傳一個陣列 
// $data = $pdo->query($sql)->fetchColumn();  回傳0或1

print_r($data);

/* $date有撈到資料，代表帳密正確，這樣多做一次
if($acc == $date['acc'] && $pw == $date['pw']){
  echo "登入成功";
}else{
  echo "登入失敗";
}*/

if(!empty($data)){
  header("location:member_center.php");
  // $_SESSION['id'] = $data['id'];
  // $_SESSION['login'] = 1;
  // 建立 cookie
  setcookie("login", 1, time()+60);
  setcookie("id", $data['id'], time()+60);
}else{
  header("location:index.php?err=1");
}


?>