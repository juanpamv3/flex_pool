<?php
<<<<<<< HEAD
session_start();
=======
>>>>>>> FETCH_HEAD
$_user = $_POST["_user"];
$_password = $_POST["_password"];

$mysqli = new mysqli("localhost", "root", "root", "flex_pool_db");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
  $sql = "SELECT * FROM admin_users WHERE username='$_user' AND password='$_password'";
  $result = $mysqli->query($sql);
  $row = $result->fetch_array;
  if ($result->num_rows > 0) {
<<<<<<< HEAD
    header('Location: ../admin/index.php');
=======
    header('Location: ../admin/index.html');
>>>>>>> FETCH_HEAD
  }else {
    echo "Something is wrong with your user name or password";
  }
}
<<<<<<< HEAD
if(isset($_SESSION["user_id"])) {
	header('Location: ../admin/index.php');
}
=======
>>>>>>> FETCH_HEAD
?>
