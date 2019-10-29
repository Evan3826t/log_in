<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>會員註冊</title>
  <link rel="stylesheet" href="./css/all.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <style>
  .content{
    padding:20px;
  }
  .Sup{
    color: rgb(253, 184, 34);
  }
  </style>
</head>
<body>
<?php
  if(!empty($_GET['success'])){
    if($_GET['success'] == 2){
      echo "註冊失敗";
    }
  }
?>

<form action="reg_api.php" method="post"> 
        <div class="main">
            <div class="Sin"><a href="index.php"><i class="fas fa-sign-in-alt"></i> SIGN IN</a></div>
            <div class="Sup"><i class="fas fa-user-plus"></i> SIGN UP</div>
            <div class="content">
                <div>User Name</div>
                <div><input type="text" name="acc" id="acc" class="input"></div>
                <div> Password</div>
                <div><input type="password" name="pw" id="pw" class="input"></div>
                <div>Name</div>
                <input type="text" name="name" id="name" class="input">
                <div>Address</div>
                <input type="text" name="addr" id="addr" class="input">
                <div>Tel</div>
                <input type="text" name="tel" id="tel" class="input">
                <div>Birthday</div>
                <input type="date" name="date" id="date" class="input">
                <div>E-mail</div>
                <input type="text" name="email" id="email" class="input">
                <br><br>
                <input type="reset" value="reset" class="re">
            </div>
            <div class="btn">
                <div class="SinBtn">CREATE USER</div>
                <div class="SinBtn2"><input type="submit" value=" ＞ " class="sub"></div>
                
            </div>
        </div>
    </form>
</body>
</html>
