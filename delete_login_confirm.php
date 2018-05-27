<html>

<head>
<title>Delete_login</title>

</head>
<body>

<?php
$id=$_POST['id'];
// Check if username and password are correct
if ($_POST["username"] == "201728012115035" && $_POST["password"] == "230430") {
 
// If correct, we set the session to YES
  session_start();
  $_SESSION["Login"] = "YES";
  echo "<h1>Login correctly!</h1>";
  echo "<form method='post' action='delete.php'>";
  echo "<p><input type='hidden' name='id' value=$id /></p>";
  echo "<p><input type='submit' value='delete'/></p>";
  echo "</form>";
  echo "There will be notification after finishing deletion.";
}
else {
 
// If not correct, we set the session to NO
  session_start();
  $_SESSION["Login"] = "NO";
  echo "<h1>You are NOT logged correctly in </h1>";
 
}

?>

</body>
</html>