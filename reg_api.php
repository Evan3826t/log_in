<?php
/***************************************************
 * 會員註冊行為：
 * 1.建立連線資料庫的參數
 * 2.判斷是否有送來表單資料
 * 3.建立所需的SQL語法
 * 4.將表單資料以變數形式填入SQL語法中
 * 5.執行資料庫連線並送出SQL語法
 * 6.判斷SQL語法是否執行成功，執行下一步
 ****************************************tel********/

include_once "base.php";

$user['acc'] = $_POST['acc'];
$user['pw'] = $_POST['pw'];
$user['name'] = $_POST['name'];
$user['addr'] = $_POST['addr'];
$user['tel'] = $_POST['tel'];
$user['date'] = $_POST['date'];
$user['email'] = $_POST['email'];

// insert into user () value()


// $pdo->exec($sql) 用在不需要回傳資料情況 (del,update,insert)
//  echo $pdo->exec($sql);   送出表單


// 判斷是否成功
if( insert("user",$user)){
    // echo "新增成功";
    header("location:index.php?success=1");
}else{
    // echo "新增失敗";
    header("location:reg.php?success=2");
}

?>