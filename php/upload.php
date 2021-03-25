<?php
	if ($_FILES["file"]["error"] > 0)
	{
		echo "<script>alert('错误：: " . $_FILES["file"]["error"] . "<br>')</script>";
	}
	else
	{	
		if (file_exists("../upload/" . $_FILES["file"]["name"]))
		{
			echo "<script>alert('文件已存在')</script>";
		}
		else
		{
			move_uploaded_file($_FILES["file"]["tmp_name"], "../upload/" . $_FILES["file"]["name"]);
			echo "文件存储在: " . "../upload/" . $_FILES["file"]["name"];
			echo "<script>alert('上传成功')</script>";
		}
	}
	echo "<script>location.href='../src/nav.php';</script>"
?>