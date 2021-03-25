<?php
	require_once('conn.php');
	$username =trim($_POST['username']);
	$password = $_POST['password'];
	$sql = "select * from user where username = '$username'";
	$info = mysqli_query($conn,$sql);
    $row = mysqli_fetch_row($info);

	if(empty($username)){
		echo "<script>alert('用户名不能为空');location.href='../src/login.php';</script>";
	}else if(empty($password)){
		echo "<script>alert('密码不能为空');location.href='../src/login.php';</script>";
	}else{
		if($res){
			echo "<script>alert('用户名已经存在');location.href='../src/login.php';</script>";
		}else{
			$sql1 = "insert into user (username,password) value ('$username','$password')";
			$result = mysqli_query($conn,$sql1);
			if($result){
				echo "<script>alert('注册成功,请登录');</script>";
				echo "<script>location.href='../src/login.php';</script>";
			}else{
				echo "<script>alert('注册失败,请重试一次');</script>";
				echo "<script>location.href='../src/login.php';</script>";
			}
		}
	}

?>