<?php
/***************************************************
 * 會員登入行為：
 * 1.建立連線資料庫的參數
 * 2.判斷是否有送來表單資料
 * 3.從資料庫取得資料
 * 4.比對表單資料和資料庫資料是否一致
 * 5.根據比對的結果決定畫面的行為
  ***************************************************/

$acc = $_POST['acc'];
$pw = $_POST['pw'];

$dsn = "mysql:host=localhost;charset=utf8;dbname=mydb";
$pdo = new PDO($dsn,'root','123');

// select * from user where acc='$acc' && pw='$pw' 回傳一堆資料
// select count(*) from user where acc='$acc' && pw='$pw' 回傳一個數字，速度比較快
$sql = "select count(*) as 'R' from user where acc='$acc' && pw='$pw'";

// $data = $pdo->query($sql)->fetch(); 回傳一個陣列 
$data = $pdo->query($sql)->fetchColumn(); // 回傳0或1

print_r($data);

/* $date有撈到資料，代表帳密正確，這樣多做一次
if($acc == $date['acc'] && $pw == $date['pw']){
  echo "登入成功";
}else{
  echo "登入失敗";
}*/

if($data){
  echo "登入成功";
}else{
  echo "登入失敗";
}


?>