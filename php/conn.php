<?PHP
    header("Content-type: text/html; charset=utf-8");
    $conn=mysqli_connect("localhost","root","","user");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "连接成功";
?>