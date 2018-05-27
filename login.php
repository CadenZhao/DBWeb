<html>
<head>
<title>Login</title>
</head>
<body>

<h2>Please login for confirming insertion</h2>

<?php
echo "<form method='post' action='login_confirm.php'>";
echo "<p>Username: <input type='text' name='username'></p>";
echo "<p>Password: <input type='text' name='password'></p>";

$insert=$_FILES["insert"]["tmp_name"];
$insert=file_get_contents($insert);
echo "<input type='hidden' name='insert' value='".$insert."'/>";
echo "<p><input type='submit' value='login'></p>";
echo "</form>";
?>


</body>
</html>