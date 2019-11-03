<?
$dsn = "mysql:host=localhost;charset=utf8;dbname=mydb";
$pdo = new PDO($dsn,'root','');
session_start();
function all($table){
    global $pdo;// 引用全域變數
    $id = $_SESSION['id'];
    $sql = "select * from `$table`";
    return  $pdo->query($sql)->fetchall();
}


function find( $table, $id){
    //取得某id的所有資料
    global $pdo;// 引用全域變數
    $sql= "select * from $table where id='$id'";
    return $pdo->query($sql)->fetch();
}

function insert($table,$data){
    //把$data的資料新增到資料庫
    global $pdo;
    $row="`" . implode("`,`",array_keys($data)) . "`";
    $value="'" . implode("','",$data) . "'";
    $sql="insert into $table($row) values($value)";
    echo $sql;
    return $pdo->exec($sql);
}

?>