<?php
$id = $_POST["_id"];
$mysqli = new mysqli("localhost", "root", "root", "flex_pool_db");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
  $sql = "DELETE FROM profiles WHERE id='$id'";
  if ($mysqli->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
}
