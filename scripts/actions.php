<?php
//connection
function connect($host, $user, $password, $dataBase){
  $mysqli = new mysqli($host, $user, $password, $dataBase);
  if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  } else {
    return $mysqli;
  }
}
// set Color
function setColor($category){
  switch ($category) {
      case 1:
          $class = "redHighlight";
          return $class;
          break;
      case 2:
          $class = "motionHighlight";
          return $class;
          break;
      case 3:
          $class = "greenHighlight";
          return $class;
          break;
      case 4:
          $class = "qaHighlight";
          return $class;
          break;
  }
}
// set Day
function setDay($date){
  $date = strval($date);
  switch ($date) {
      case 'Mon':
          $dayWeek = 0;
          return $dayWeek;
          break;
      case 'Tue':
          $dayWeek = 1;
          return $dayWeek;
          break;
      case 'Wed':
          $dayWeek = 2;
          return $dayWeek;
          break;
      case 'Thr':
          $dayWeek = 3;
          return $dayWeek;
          break;
      case 'Fri':
          $dayWeek = 4;
          return $dayWeek;
          break;
      default:
          $dayWeek = 5;
          return $dayWeek;
  }
}

/*
Display Resourses
*/

//Get Available Profiles
function getAvailable($connection, $today, $category){
  $sql = "SELECT id, name, country, role, skills, availability FROM profiles WHERE category = $category ORDER BY last_modified";
  $result = $connection->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_array()) {
        $avStatus = json_decode($row["availability"]);
          if ($avStatus[$today] == "available" || $avStatus[$today] == "halftime"){
            $number = $row["id"];
            $resultado = $number%2;
            if ( $resultado != 0){
              echo '<div class="col-sm-12 resourse1">
                <div class="col-sm-1">
                  <p>'. $row["country"].'</p>
                </div>
                <div class="col-sm-3">
                  <a href="profile.php?id='. $row["id"].'">
                    <p class="'.setColor($category).'">'. $row["role"].'</p>
                  </a>
                </div>
                <div class="col-sm-8">
                  <p>'. $row["skills"].'</p>
                </div>
              </div>';
            } else {
              echo '<div class="col-sm-12 resourse2">
                <div class="col-sm-1">
                  <p>'. $row["country"].'</p>
                </div>
                <div class="col-sm-3">
                  <a href="profile.php?id='. $row["id"].'">
                    <p class="'.setColor($category).'">'. $row["role"].'</p>
                  </a>
                </div>
                <div class="col-sm-8">
                  <p>'. $row["skills"].'</p>
                </div>
              </div>';
            }
          }
      }
  } else {
      echo "0 results";
  }
}

//Get Unavailable Profiles
function getUnvailable($connection, $today, $category){
  $sql = "SELECT id, name, country, role, skills, availability FROM profiles WHERE category = $category ORDER BY last_modified";
  $result = $connection->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_array()) {
        $avStatus = json_decode($row["availability"]);
          if ($avStatus[$today] == "booked"){
            $number = $row["id"];
            $resultado = $number%2;
            if ( $resultado != 0){
              echo '<div class="col-sm-12 resourse1">
                <div class="col-sm-1">
                  <p>'. $row["country"].'</p>
                </div>
                <div class="col-sm-3">
                  <a href="profile.php?id='. $row["id"].'">
                    <p class="'.setColor($category).'">'. $row["role"].'</p>
                  </a>
                </div>
                <div class="col-sm-8">
                  <p>'. $row["skills"].'</p>
                </div>
              </div>';
            } else {
              echo '<div class="col-sm-12 resourse2">
                <div class="col-sm-1">
                  <p>'. $row["country"].'</p>
                </div>
                <div class="col-sm-3">
                  <a href="profile.php?id='. $row["id"].'">
                    <p class="'.setColor($category).'">'. $row["role"].'</p>
                  </a>
                </div>
                <div class="col-sm-8">
                  <p>'. $row["skills"].'</p>
                </div>
              </div>';
            }
          }
      }
  } else {
      echo "0 results";
  }
}
/*
Profiles
*/


/*
Admin Display Resourses
*/
//Get Available Profiles
function adminGetAvailable($connection, $today, $category){
  $sql = "SELECT id, name, country, role, availability, last_modified FROM profiles WHERE category = $category ORDER BY last_modified";
  $result = $connection->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_array()) {
        $avStatus = json_decode($row["availability"]);
          if ($avStatus[$today] == "available" || $avStatus[$today] == "halftime"){
            $number = $row["id"];
            $resultado = $number%2;
            if ( $resultado != 0){
              echo '<div class="col-sm-12 resourse1">
                    <div class="col-xs-2 mobile_options visible-xs-block">
                      <div class="visible-xs-block"><span class="glyphicon glyphicon-globe option-icon"></span></div><p class="hidden-xs">SITE</p>
                      <div class="visible-xs-block"><span class="glyphicon glyphicon-user option-icon"></span></div><p class="hidden-xs">NAME</p>
                      <div class="visible-xs-block"><span class="glyphicon glyphicon-briefcase option-icon"></span></div><p class="hidden-xs">ROLE</p>
                      <div class="visible-xs-block"><span class="glyphicon glyphicon glyphicon-edit option-icon"></span></div><p class="hidden-xs">ACTIONS</p>
                    </div>
                <div class="col-sm-1">
                  <p>'. $row["country"].'</p>
                </div>
                <div class="col-sm-3">
                  <a href="profile.php?id='. $row["id"].'">
                    <p class="'.setColor($category).'">'. $row["name"].'</p>
                  </a>
                </div>
                <div class="col-sm-3">
                  <a href="profile.php?id='. $row["id"].'">
                    <p class="'.setColor($category).'">'. $row["role"].'</p>
                  </a>
                </div>
                <div class="col-sm-5">
                  <a href="" class="redBtn" data-rownumber="'. $row["id"].'"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="hidden-xs"> Delete</span></a>
                  <a href="availability.php?id='. $row["id"].'" class="redBtn"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="hidden-xs"> Availability</span></a>
                </div>
              </div>';
            } else {
              echo '<div class="col-sm-12 resourse2">
              <div class="col-xs-2 mobile_options visible-xs-block">
                <div class="visible-xs-block"><span class="glyphicon glyphicon-globe option-icon"></span></div><p class="hidden-xs">SITE</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon-user option-icon"></span></div><p class="hidden-xs">NAME</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon-briefcase option-icon"></span></div><p class="hidden-xs">ROLE</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon glyphicon-edit option-icon"></span></div><p class="hidden-xs">ACTIONS</p>
              </div>
          <div class="col-sm-1">
            <p>'. $row["country"].'</p>
          </div>
          <div class="col-sm-3">
            <a href="profile.php?id='. $row["id"].'">
              <p class="'.setColor($category).'">'. $row["name"].'</p>
            </a>
          </div>
          <div class="col-sm-3">
            <a href="profile.php?id='. $row["id"].'">
              <p class="'.setColor($category).'">'. $row["role"].'</p>
            </a>
          </div>
          <div class="col-sm-5">
            <a href="" class="redBtn" data-rownumber="'. $row["id"].'"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="hidden-xs"> Delete</span></a>
            <a href="availability.php?id='. $row["id"].'" class="redBtn"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="hidden-xs"> Availability</span></a>
          </div>
        </div>';
            }
          }
      }
  } else {
      echo "0 results";
  }
}

//Get Unavailable Profiles
function adminGetUnvailable($connection, $today, $category){
  $sql = "SELECT id, name, country, role, skills, availability FROM profiles WHERE category = $category ORDER BY last_modified";
  $result = $connection->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_array()) {
        $avStatus = json_decode($row["availability"]);
          if ($avStatus[$today] == "booked"){
            $number = $row["id"];
            $resultado = $number%2;
            if ( $resultado != 0){
              echo '<div class="col-sm-12 resourse1">
                    <div class="col-xs-2 mobile_options visible-xs-block">
                      <div class="visible-xs-block"><span class="glyphicon glyphicon-globe option-icon"></span></div><p class="hidden-xs">SITE</p>
                      <div class="visible-xs-block"><span class="glyphicon glyphicon-user option-icon"></span></div><p class="hidden-xs">NAME</p>
                      <div class="visible-xs-block"><span class="glyphicon glyphicon-briefcase option-icon"></span></div><p class="hidden-xs">ROLE</p>
                      <div class="visible-xs-block"><span class="glyphicon glyphicon glyphicon-edit option-icon"></span></div><p class="hidden-xs">ACTIONS</p>
                    </div>
                <div class="col-sm-1">
                  <p>'. $row["country"].'</p>
                </div>
                <div class="col-sm-3">
                  <a href="profile.php?id='. $row["id"].'">
                    <p class="'.setColor($category).'">'. $row["name"].'</p>
                  </a>
                </div>
                <div class="col-sm-3">
                  <a href="profile.php?id='. $row["id"].'">
                    <p class="'.setColor($category).'">'. $row["role"].'</p>
                  </a>
                </div>
                <div class="col-sm-5">
                  <a href="" class="redBtn" data-rownumber="'. $row["id"].'"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="hidden-xs"> Delete</span></a>
                  <a href="availability.php?id='. $row["id"].'" class="redBtn"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="hidden-xs"> Availability</span></a>
                </div>
              </div>';
            } else {
              echo '<div class="col-sm-12 resourse2">
              <div class="col-xs-2 mobile_options visible-xs-block">
                <div class="visible-xs-block"><span class="glyphicon glyphicon-globe option-icon"></span></div><p class="hidden-xs">SITE</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon-user option-icon"></span></div><p class="hidden-xs">NAME</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon-briefcase option-icon"></span></div><p class="hidden-xs">ROLE</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon glyphicon-edit option-icon"></span></div><p class="hidden-xs">ACTIONS</p>
              </div>
          <div class="col-sm-1">
            <p>'. $row["country"].'</p>
          </div>
          <div class="col-sm-3">
            <a href="profile.php?id='. $row["id"].'">
              <p class="'.setColor($category).'">'. $row["name"].'</p>
            </a>
          </div>
          <div class="col-sm-3">
            <a href="profile.php?id='. $row["id"].'">
              <p class="'.setColor($category).'">'. $row["role"].'</p>
            </a>
          </div>
          <div class="col-sm-5">
            <a href="" class="redBtn" data-rownumber="'. $row["id"].'"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="hidden-xs"> Delete</span></a>
            <a href="availability.php?id='. $row["id"].'" class="redBtn"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="hidden-xs"> Availability</span></a>
          </div>
        </div>';
            }
          }
      }
  } else {
      echo "0 results";
  }
}
?>
