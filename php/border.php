<?php
    require_once("conn.php");//首先链接数据库
    session_start();

    $liuyan = $_POST['liuyan'];
    $user = $_SESSION['user'];

    $sql = "insert into liuyan(username,liuyan) values('$user','$liuyan')";

    if(mysqli_query($conn,$sql)){
        echo "<script>alert('留言成功')</script>";
        echo "<script>location.href='../src/nav.php';</script>";
    }
    else{
        echo "<script>alert('留言失败')</script>";
        echo "<script>location.href='../src/nav.php';</script>";
    }
    
?>