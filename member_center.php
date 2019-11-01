<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>會員中心</title>
  <link rel="stylesheet" href="./css/all.min.css">
  <style>
  p{
    padding: 0;
    margin: 5px;
    color:rgb(253, 184, 34);
  }
  .mem{
    width: 100px;
    height: 100%;
    background-color:black;
    position: absolute;
    text-align: center;
    font-size: 30px;
  }
  a{
    text-decoration: none;
    color: rgb(172, 169, 169);;
  }
  body{
      color: rgb(172, 169, 169);
  }
  .main{
      width: 800px;
      height: 600px;
      margin: auto;
      position: relative;
      top: 100px;
      box-shadow: 10px 10px 10px rgb(160, 152, 152);
  }
  .content{
      width: 700px;
      height: 500px;
      background-color: rgb(68, 68, 68);
      position: absolute;
      left: 100px;
      padding: 50px;
      box-sizing: border-box;
      font-size:20px;
      padding-top:10px
  }
  .btn{
      width: 700px;
      height: 100px;
      background-color: rgb(87, 86, 86);
      position: absolute;
      left: 100px;
      top: 500px;
      line-height: 100px;
      text-align: center;
      font-size: 30px;
  }
  .SinBtn{
      width: 600px;
      height: 100%;
      position: absolute;
      color: rgb(253, 184, 34);
  }
  .SinBtn2{
      height: 100px;
      position: absolute;
      left: 450px;
      box-sizing: border-box;
      padding: 0;
      margin: 0;

  }
  .sub{
      background-color:transparent;
      width: 100px;
      height: 100px;
      border: 0;
      position: absolute;
      background-color: rgb(253, 184, 34);
      left:150px

  }
 
  </style>
</head>
<body>
  <?php
    include ("base.php");
    if(empty($_SESSION['login'])){
      exit();
    }

    $id = $_SESSION['id'];

    $sql = "select * from `user` where `id`='$id'";
    $data = $pdo->query($sql)->fetch();
  ?>
  <a href="logout.php">登出</a>
  <a href="user_list.php">會員列表</a>
  <div class="member">
    
        <div class="main">
          <div class="mem"><br><i class="fas fa-user-circle" style="color:rgb(253, 184, 34)"></i>   
          </div>
          <div class="content">
            <form action="edit_member.php" method="POST">
              <div>HI! 歡迎光臨!以下是你的個人資料:</div><br>
              <div>User Name</div>
              <p><?=$data['acc']?></p>
              <div> Password</div>
              <p><?=$data['pw']?></p>                
              <div>Name</div>
              <p><input type="text" name="name" id="name" class="input" value="<?=$data['name']?>"></p>
              <div>Address</div>
              <p><input type="text" name="addr" id="addr" class="input" value="<?=$data['addr']?>"></p>
              <div>Tel</div>
              <p><input type="text" name="tel" id="tel" class="input" value="<?=$data['tel']?>"></p>
              <div>Birthday</div>
              <p><input type="text" name="birthday" id="birthday" class="input" value="<?=$data['birthday']?>"></p>
              <div>E-mail</div>
              <p><input type="email" name="email" id="email" class="input" value="<?=$data['email']?>"></p>
              <br>
              <input type="submit" value="修改">
            </form>
          </div>
        <form action="index.php" method="post"> 
          <div class="btn">
              <div class="SinBtn">BACK TO HOMEPAGE</div>
              <div class="SinBtn2"><input type="submit" value=" ＞ " class="sub"></div>
              
          </div>
        </div>
        
    </form>
</body>
</html>