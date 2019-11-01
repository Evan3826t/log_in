<?php
    // all()-給定資料表名後，會回傳整個資料表的資料
    // find()-會回傳資料表指定id的資料
    // update()-給定資料表的條件後，會去更新相應的資料。
    // insert()-給定資料內容後，會去新增資料到資料表
    // del()-給定條件後，會去刪除指定的資料
    
    include_once "base.php";

    /* 丟入base.php ，其他檔案就可以使用
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
    */
    $user= find("user",5);
    echo $user['name'];
    echo "<hr>";
    $user2= find("user",17);
    echo $user2['name'];
    
    function insert($table,$data){
        //把$data的資料新增到資料庫
        global $pdo;
        $row="`" . implode("`,`",array_keys($data)) . "`";
        $value="'" . implode("','",$data) . "'";
        $sql="insert into $table($row) values($value)";
        echo $sql;
        return $pdo->exec($sql);
    }
    

    /*
    function insert($table, $data){
        // 把 $data 的資料新增到資料庫
        global $pdo;
        foreach($data as $key => $value){
            $sql= "insert into $table(`$key`) values('$value')";
        }
        $pdo->exec($sql);
    }
    
    $data=[
        'name'=>'evan',
        'acc'=>'456',
        'addr'=>'zxc'
    ];
    insert( "user",$data);
    */ 
?>