<?php
$_name = $_POST["_name"];
$_role = $_POST["_role"];
$_country = $_POST["_country"];
$_category = $_POST["_category"];
$_skills = $_POST["_skills"];
$_availability = ["available", "available", "available", "available", "available", "available", "available", "booked", "booked", "booked", "booked", "booked", "halftime", "halftime", "halftime", "halftime", "halftime", "available", "available", "available", "available", "available"];
$avDecoded = json_encode($_availability);

$mysqli = new mysqli("localhost", "root", "root", "flex_pool_db");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
  $sql = "UPDATE profiles SET  name='$_name', role='$_role', country='$_country', skills='$_skills', availability='$avDecoded' WHERE id= 12";
  if (mysqli_query($mysqli, $sql)) {
      header('Location: ../index.html');
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
  }
}
