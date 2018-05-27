
<html>

<head>
<title>Insert data into database from text files</title>
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
//获取输入序列，存入服务器insert.fa中
$file = fopen("insert.fa", "w") or die("Unable to open file!");
fwrite($file, $_POST['insert']);
fclose($file);
//调用服务器fstTOdb.py程序进行格式转换，转换后的文件名为fstTOdb.txt
system('python fstTOdb.py');

$f = fopen("http://159.226.67.97/student2018/201728012115035/fstTOdb.txt", "r");
$rownum=count(file("http://159.226.67.97/student2018/201728012115035/fstTOdb.txt"));
// Read line by line until end of file
for($i=0;$i<$rownum;$i++) {
	$arr = explode("@@",fgets($f));
	$sql="INSERT INTO protein(annotation,id,len,seq,specie) VALUES ('$arr[0]','$arr[1]','$arr[2]','$arr[3]','$arr[4]')";
	$conn -> query($sql);
}
echo '恭喜！成功插入数据！';

fclose($f);
$conn->close();


?>

</body>
</html>