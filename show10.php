
<html>
<?php
$conn = new mysqli("localhost", "201728012115035", "230430", "201728012115035");
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$strSQL = "SELECT * FROM protein";
$rs = $conn -> query($strSQL);

$i=0;
while($row = $rs->fetch_assoc()){
	if($i<10){
		$id=$row['id'];
		$len=$row['len'];
		$specie=$row['specie'];
		$annotation=$row['annotation'];
		$seq=$row['seq'];
		echo "ID:$id<br>";
		echo "Length: $len<br>";
		echo "Specie: $specie<br>";
		echo "Annotation: $annotation<br>";
		echo "Sequnence: $seq<br><br><br>";
	}
	else{
		break;
		}
	$i=$i+1;
  }
// Close the database connection
$conn -> close();
?>

</body>
</html>