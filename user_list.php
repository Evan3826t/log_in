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
      font-size: 20px;
      padding-top: 10px;
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
  table  td{
    border:2px solid white;
  }
  table{
    border-collapse:collapse;
  }
  </style>
</head>
<body>
  <?php
    function all($table){
      include ("base.php");
      $id = $_SESSION['id'];
      $sql = "select * from `$table`";
      return  $pdo->query($sql)->fetchall();
    }
  ?>
  <a href="logout.php">登出</a>
  <div class="member">
    
        <div class="main">
          <div class="mem"><br><i class="fas fa-user-circle" style="color:rgb(253, 184, 34)"></i>   
          </div>
          <div class="content">
          <table>
          <?php
            foreach(all("user") as $user){
                ?>
                <tr>
                    <td><?=$user['name']?></td>
                    <td><?=$user['acc']?></td>
                    <td><?=$user['addr']?></td>
                    <td><?=$user['tel']?></td>
                    <td><?=$user['email']?></td>
                    <td><a href="delete_user.php?id=<?=$user['id']?>" style="color:rgb(253, 184, 34)">刪除</a></td>
                
                </tr>

                <?php
            }
          ?>
          </table>
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