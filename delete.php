
<html>

<head>
<title>Delete record</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "201728012115035";
$password = "230430";
$dbname = "201728012115035";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$id=$_POST['id'];
$sql="DELETE FROM protein WHERE id = '$id'";
$conn -> query($sql);

echo '删除成功';
$conn->close();


?>

</body>
</html>