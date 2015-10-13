<?php
$mysqli = new mysqli("localhost", "root", "root", "flex_pool_db2");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {

} ?>
<? include 'header.php'; ?>
        <!-- Categories -->
        <div class="col-sm-12 resoursesMainBlock">
          <img src="images/design_icon.png" />
          <h1>DESIGN | RESOURSES</h1>
          <p>Select one role to see full availability</p>

        </div><!-- End of categories -->

        <div class="col-sm-12 designResoursesBlock"><!-- availables resourses BOX -->
          <div class="col-sm-4" style="width: auto; padding-right: 10px;" id="sectionHeader">
            <h4>AVAILABLE</h4>
          </div>
          <div class="row hrContainer">
            <hr class="primaryHr"/>
          </div>
          <!-- Resourses Block -->
          <div class="col-sm-12">
            <!-- Resourses header -->
            <div class="col-sm-12 resourse1">
              <div class="col-sm-1">
                <p>SITE</p>
              </div>
              <div class="col-sm-3">
                <p>ROLE</p>
              </div>
              <div class="col-sm-8">
                <p>SKILLS</p>
              </div>
            </div><!-- End of Resourses header -->

            <?php
            $sql = "SELECT id, name, country, role, skills, availability FROM profiles WHERE category = 1";
            $result = $mysqli->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_array()) {
                  $avStatus = json_decode($row["availability"]);
                    if ($avStatus[0] == "available" || $avStatus[0] == "halftime"){
                      $number = $row["id"];
                      $resultado = $number%2;
                      if ( $resultado != 0){
                        echo '<div class="col-sm-12 resourse1">
                          <div class="col-sm-1">
                            <p>'. $row["country"].'</p>
                          </div>
                          <div class="col-sm-3">
                            <a href="profile.php?id='. $row["id"].'">
                              <p class="redHighlight">'. $row["role"].'</p>
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
                              <p class="redHighlight">'. $row["role"].'</p>
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
             ?>
            

        </div>
      </div><!-- End of Available Resourses -->

      <div class="col-sm-12 designResoursesBlock"><!-- BOOKED resourses BOX -->
        <div class="col-sm-4" style="width: auto; padding-right: 10px;" id="sectionHeader">
          <h4>BOOKED</h4>
        </div>
        <div class="row hrContainer">
          <hr class="primaryHr"/>
        </div>
        <!-- Resourses Block -->
        <div class="col-sm-12">
          <!-- Resourses header -->
          <div class="col-sm-12 resourse1">
            <div class="col-sm-1">
              <p>SITE</p>
            </div>
            <div class="col-sm-3">
              <p>ROLE</p>
            </div>
            <div class="col-sm-8">
              <p>SKILLS</p>
            </div>
          </div><!-- End of Resourses header -->
          <?php
          $sql = "SELECT id, name, country, role, skills, availability FROM profiles WHERE category = 1";
          $result = $mysqli->query($sql);
          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_array()) {
                $avStatus = json_decode($row["availability"]);
                $arrlength = count($avStatus);
                  if ($avStatus[0] == "booked"){
                    $number = $row["id"];
                    $resultado = $number%2;
                    if ( $resultado != 0){
                      echo '<div class="col-sm-12 resourse1">
                        <div class="col-sm-1">
                          <p>'. $row["country"].'</p>
                        </div>
                        <div class="col-sm-3">
                          <a href="profile.php?id='. $row["id"].'">
                            <p class="redHighlight">'. $row["role"].'</p>
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
                            <p class="redHighlight">'. $row["role"].'</p>
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
           ?>
      </div>
    </div><!-- End of BOOKED Resourses -->

        <div class="col-sm-12 prodigiousLogo">
          <img src="images/prodigious_logo.svg" />
        </div><!-- End of Prodigious Logo -->
      </div><!-- End of innerContainer -->
<? include 'footer.php'; ?>
