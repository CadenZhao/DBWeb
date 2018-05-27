<html>
<head>
<title>Delete_login</title>
</head>
<body>
<h2>Please login for confirming deletion</h2>
<?php
$id=$_GET['id'];
echo "<form method='post' action='delete_login_confirm.php'>";
echo "<p>Username: <input type='text' name='username' /></p>";
echo "<p>Password: <input type='text' name='password' /></p>";
echo "<p><input type='hidden' name='id' value=$id /></p>";
echo "<p><input type='submit' value='login'/></p>";
echo "</form>";

?>

</body>
</html>

