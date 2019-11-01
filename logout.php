<?php
setcookie("login","",time()-360);
setcookie("id","",time()-360);
header("location:index.php");
?>