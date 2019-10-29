<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>尋回密碼</title>
  <link rel="stylesheet" href="./css/all.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <style>
  h2{
    color: rgb(253, 184, 34); 
    text-align:center;
  }
  </style>
</head>
<body>
<!---------設計表單內容---------->
  <form action="forget.php" method="post"> 
    <div class="main">
      <div class="Sin"><a href="index.php"><i class="fas fa-sign-in-alt"></i> SIGN IN</a></div>
      <div class="Sup"><a href="reg.php"><i class="fas fa-user-plus"></i> SIGN UP</a></div>
      <div class="content">
          <h2>Find your password</h2>
          <div>User Name</div>
          <div><input type="text" name="acc" id="acc" class="input"></div><br>
          <div> E-mail</div>
          <div><input type="email" name="email" id="email" class="input"></div><br>
          <input type="reset" value="reset" class="re"><br>
      </div>
      <div class="btn">
          <div class="SinBtn">GET MY PASSWORD</div>
          <div class="SinBtn2"><input type="submit" value=" ＞ " class="sub"></div>
          
      </div>
    </div>
  </form>

  <?php
  $acc = $_POST['acc'];
  $email = $_POST['email'];
  $dsn = "mysql:host=localhost;chraset=utf8;dbname=mydb";
  $pdo = new PDO($dns,'root','123');

  $sql = "select "
  ?>
</body>
</html>
