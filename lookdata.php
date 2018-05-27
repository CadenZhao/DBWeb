<html>

<head>
<title>Reading from text files</title>
</head>
<body>

<?php

$f = fopen("http://159.226.67.97/student2018/201728012115035/data0.txt", "r");

// Read line by line until end of file
while(!feof($f)) { 
	echo fgets($f) . "<br />";
}

fclose($f);

?>

</body>
</html>