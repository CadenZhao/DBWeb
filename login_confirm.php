<html>

<head>
<title>Login</title>

</head>
<body>

<?php
$insert=$_POST['insert'];
// Check if username and password are correct
if ($_POST["username"] == "201728012115035" && $_POST["password"] == "230430") {
 
// If correct, we set the session to YES
  session_start();
  $_SESSION["Login"] = "YES";
  echo "<h1>You are now logged correctly in</h1>";
  echo "<form method='post' action='insert.php'>";
  echo "<input type='hidden' name='insert' value='".$insert."'/>";
  echo "<p><input type='submit' value='Click here to insert'></p>";
  echo "</form>";
  echo "Please be patient, cause it may take much time to insert......<br><br>";
  echo "There will be notification after finishing insertion.";
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