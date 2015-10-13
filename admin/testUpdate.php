<?php

  $mysqli = new mysqli("localhost", "root", "root", "flex_pool_db");
  if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  } else {
    $idNumber = $_GET['id'];
    $sql = "SELECT id, name, country, role, skills, availability, category FROM profiles WHERE id = 12";
    $result = $mysqli->query($sql);
    while($row = $result->fetch_array()) {


?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Flex Pool</title>
  </head>
  <body>
    <div class="container">
      <form action="scripts/editUser.php" method="post">
        <div class="form-group">
          <label for="name">Name:</label><br />
          <input type="text" class="form-control" id="name" name="_name" value="<?php echo $row["name"]; ?>"><br />
          <label for="role">Role:</label><br />
          <input type="text" class="form-control" id="role" name="_role" value="<?php echo $row["role"]; ?>"><br />
          <label for="country">Country</label><br />
          <select class="form-control" id="country" name="_country">
            <option value="CR">Costa Rica</option>
            <option value="COL">Colombia</option>
            <option value="MU">MU</option>
          </select><br />
          <label for="skills">Skills</label><br />
          <textarea rows="4" cols="50" id="skills" name="_skills"><?php echo $row["skills"]; }} ?></textarea><br />
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </form>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
