<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>註冊登入系統</title>
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>
    body{
        color: rgb(172, 169, 169);
    }
    .Sin{
        color: rgb(253, 184, 34);
    }
    .content{
        padding-top:150px;
    }
    </style>
</head>
<body>
    <?php
        include ("base.php");
        if(!empty($_GET['success'])){
          if($_GET['success'] == 1){
            echo "註冊成功";
          }
        }
        if(!empty($_GET['err'])){
            if($_GET['err'] == 1){
                $error = "登入失敗";
            }
        }else{
            $error = '';
        }
        if(!empty($_COOKIE['login'])){
            header("location:member_center.php?do=123");
        }
      ?>
    <form action="login_api.php" method="post"> 
        <div class="main">
            <div class="Sin"><i class="fas fa-sign-in-alt"></i> SIGN IN</div>
            <div class="Sup"><a href="reg.php"><i class="fas fa-user-plus"></i> SIGN UP</a></div>
            <div class="content">
                <div>User Name</div>
                <div><input type="text" name="acc" id="acc" class="input"></div><br>
                <div> Password</div>
                <div><input type="password" name="pw" id="pw" class="input"></div><br>
                <input type="reset" value="reset" class="re"><br>
                <div><a href="forget.php" style="color: rgb(253, 184, 34);">Forget your password?</a></div>
                <br>
                <div style="color:red;"><?=$error?></div>
            </div>
            <div class="btn">
                <div class="SinBtn">LET ME IN</div>
                <div class="SinBtn2"><input type="submit" value=" ＞ " class="sub"></div>
                
            </div>
        </div>
    </form>

    
           
        
        
         
</body>
</html>