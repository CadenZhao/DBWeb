<!DOCTYPE html>
<html>

<head>
<title>Neurotransmitter Receptor</title>
<base href="http://159.226.67.97/student2018/201728012115035/" />
<style>
a{text-decoration:none}
a{color:RGB(0,0,200)}
#header {
    background-color:RGB(245,245,245);
    color:RGB(120,120,120);
    text-align:left;
    padding:5px;
	margin:20px 40px 0px 40px;
}
#nav {
    line-height:30px;
    background-color:RGB(245,245,245);
    height:600px;
    width:200px;
    float:left;
    padding:5px;
    margin:20px 20px 20px 40px;	
	text-align:center;
}
#section1 {
    width:550px;
    float:left;
    padding:10px;	 
    margin:0px 10px 20px 10px;	
}
#section2 {
    width:300px;
    float:right;
    padding:10px;	 
    margin:0px 40px 20px 0px;		
}
#footer {
    background-color:RGB(237,237,237);
    color:RGB(64,64,64);
    clear:both;
    text-align:center;
    padding:5px;	
	margin:0px 40px 0px 40px;	
}

</style>
</head>


<body>

<div id="header">
<a href='201728012115035.html'>
<img src='logo.png' align='middle' height='40' width='40'/>
</a>
<span style='font-size:20px'>Neurotransmitter Receptor</span>
</div>

<div id="nav">
<br><br>
<a href='201728012115035.html'>Home</a>
<br><br>
<a href='homework_introduction.html'>How did I do my homework</a>
<br><br>
<a href='https://en.wikipedia.org/wiki/Neurotransmitter_receptor'>About</a>
<br><br>
<a href='help.html'>Help</a>
<br><br>
<a href='document.html'>Document</a>
<br><br>
<a href='contact_us.html'>Contact us</a>
<br><br>
<a href='more.html'>More </a>
</div>

<div id="section1">
<h2 style='color:RGB(80,80,80);text-align:left;margin:10px'>Query for neurotransmitter receptor family</h2>
<hr style='color:RGB(254,254,254)'/><br><br><br>
<fieldset>
<form action="database.php" method="post">
  <p>Search NR information</p>
  <input type="text" name="NR" size=80 value='Please input a protein ID...(for example:AAC39581.1 or AAC)' />
  <br><br>
  <input type="submit" value="Search" style='background-color:RGB(0,0,255);color:RGB(255,255,255);width:60px;height:25px' />
</form>
<br>
<form action="show10.php" method="get">
 <input type="submit" value="Show 10 lines in the head" style='background-color:RGB(0,0,255);color:RGB(255,255,255);width:180px;height:25px' />
</form>
</fieldset>
<br><br><br>

<fieldset>
<legend>Query result</legend>
<br>
<?php
$conn = new mysqli("localhost", "201728012115035", "230430", "201728012115035");
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$post=$_POST['NR'];
$strSQL = "SELECT * FROM protein WHERE id LIKE '%$post%'";
$rs = $conn -> query($strSQL);

echo "<table border='1' align='center'>";
echo "<tr>";
echo "<td>proteinID</td>";
echo "<td>length</td>";
echo "<td>specie</td>";
echo "<td>annotation</td>";
echo "<td>sequence</td>";
echo "<td>Operation</td>";
echo "</tr>";
while($row = $rs->fetch_assoc()){
		$id=$row['id'];
		$len=$row['len'];
		$specie=$row['specie'];
		$annotation=$row['annotation'];
		$seq=$row['seq'];
		echo "<tr>";
		echo "<td>$id</td>";
		echo "<td>$len</td>";
		echo "<td>$specie</td>";
		echo "<td>$annotation</td>";
		echo "<td><a href='sequence.php?seq=$seq'>view the sequence</a></td>";
		echo "<td><a href='delete_login.php?id=$id'>Delete</a></td>";
		echo "</tr>";
  }
echo "</table>";
echo "<br>";
// Close the database connection
$conn -> close();
?>

</fieldset>
</div>


<div id="section2">
<p>Our website can be used to query 
for the functional annotations and expression dynamics 
of neurotransmitter receptor gene family.
<br><br>
<a href='https://en.wikipedia.org/wiki/Neurotransmitter_receptor'>Learn about neurotransmitter receptor</a>
<br><br>
<a href='https://en.wikipedia.org/wiki/Gene_family'>Learn about gene family</a>
</p>
</div>



<div id="footer" style="font-size:12px">
Copyright @ 201728012115035.UCAS
</div>

</body>
</html>