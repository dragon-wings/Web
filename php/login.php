<?php
    require_once("conn.php");//首先链接数据库
    session_start();

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql = "select * from user where username='$username' and password='$password'";
    $info = mysqli_query($conn,$sql);
    $row = mysqli_fetch_row($info);
    if($row){
        echo "<script>alert('登录成功')</script>";
        
        $_SESSION["user"] = $username;

        header("Location: ../src/welcome.html");
    }else{
        echo "$row";
        echo "<script>alert('登录失败')</script>";
        echo "<script>history.go(-1);</script>";
    }
    
?>