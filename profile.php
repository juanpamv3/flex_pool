<?php

  $mysqli = new mysqli("localhost", "root", "root", "flex_pool_db2");
  if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  } else {

  }
  $idNumber = $_GET['id'];
  $sql = "SELECT id, name, country, role, skills, availability, agency, category FROM profiles WHERE id = $idNumber";
  $result = $mysqli->query($sql);
  while($row = $result->fetch_array()) {

?>
<? include 'header.php'; ?>
        <!-- Categories -->
        <div class="col-sm-12 resoursesMainBlock">
          <?php
            if ($row["category"] == 1){
              echo '<img src="images/design_icon.png" />';
            } elseif ($row["category"] == 2) {
              echo '<img src="images/motion_icon.png" />';
            } elseif ($row["category"] == 3) {
              echo '<img src="images/development_icon.png" />';
            } elseif ($row["category"] == 4) {
              echo '<img src="images/qa_icon.png" />';
            }
          ?>
          <h1><?php echo $row["role"]; ?></h1>

        </div><!-- End of categories -->

        <div class="col-sm-12 <?php if ($row["category"] == 1){
          echo 'designResoursesBlock';
        } elseif ($row["category"] == 2) {
          echo 'motionResoursesBlock';
        } elseif ($row["category"] == 3) {
          echo 'developmentResoursesBlock';
        } elseif ($row["category"] == 4) {
          echo 'qaResoursesBlock';
        } ?>"><!-- availables resourses BOX -->
          <div class="col-sm-4" style="width: auto; padding-right: 10px;" id="sectionHeader">
            <h4>PROFILE</h4>
          </div>
          <div class="row hrContainer">
            <hr class="primaryHr"/>
          </div>
          <!-- Resourses Block -->
          <div class="col-sm-12">
            <div class="col-sm-12 resourse1">
              <div class="col-sm-2">
                <p class="<?php if ($row["category"] == 1){
                  echo 'redHighlight';
                } elseif ($row["category"] == 2) {
                  echo 'motionHighlight';
                } elseif ($row["category"] == 3) {
                  echo 'greenHighlight';
                } elseif ($row["category"] == 4) {
                  echo 'qaHighlight';
                } ?>">COUNTRY</p>
              </div>
              <div class="col-sm-10">
                <p><?php echo $row["country"]; ?></p>
              </div>
            </div><!-- End of Resourse -->
            <div class="col-sm-12 resourse2">
              <div class="col-sm-2">
                <p class="<?php if ($row["category"] == 1){
                  echo 'redHighlight';
                } elseif ($row["category"] == 2) {
                  echo 'motionHighlight';
                } elseif ($row["category"] == 3) {
                  echo 'greenHighlight';
                } elseif ($row["category"] == 4) {
                  echo 'qaHighlight';
                } ?>">SKILLS</p>
              </div>
              <div class="col-sm-10">
                <p><?php echo $row["skills"]; ?></p>
              </div>
            </div><!-- End of Resourse -->
            <div class="col-sm-12 resourse1">
              <div class="col-sm-2">
                <p class="<?php if ($row["category"] == 1){
                  echo 'redHighlight';
                } elseif ($row["category"] == 2) {
                  echo 'motionHighlight';
                } elseif ($row["category"] == 3) {
                  echo 'greenHighlight';
                } elseif ($row["category"] == 4) {
                  echo 'qaHighlight';
                } ?>">AVAILABILITY</p>
              </div>
              <div class="col-sm-5">
                <p>WEEK 1</p>
                <?php
                $avStatus = json_decode($row["availability"]);
                for ($x = 0; $x <= 4; $x++){
                  if ($avStatus[$x] == "available"){
                  echo  '<a class="circle available"></a>';
                } else if($avStatus[$x] == "halftime"){
                  echo '<a class="circle half_booked"></a>';
                } else{
                  echo '<a class="circle booked"></a>';
                }
                }

                ?>
              </div>
              <div class="col-sm-5">
                <p>AGENCY</p>
                <?php
                $client = json_decode($row["agency"]);
                for ($x = 0; $x <= 4; $x++){
                  if ($client[$x] == ""){
                  echo  '<p></p>';
                } else if($client[$x] == ""){
                  echo '<p></p>';
                } else{
                  echo '<p>'.$client[$x].'</p>';
                }
                }
                ?>
              </div>
            </div><!-- End of week1 -->
            <div class="col-sm-12 resourse2">
              <div class="col-sm-offset-2 col-sm-5">
                <p>WEEK 2</p>
                <?php
                for ($x = 5; $x <= 9; $x++){
                  if ($avStatus[$x] == "available"){
                  echo  '<a class="circle available"></a>';
                } else if($avStatus[$x] == "halftime"){
                  echo '<a  class="circle half_booked"></a>';
                } else{
                  echo '<a class="circle booked"></a>';
                }
                }
                ?>
              </div>
              <div class="col-sm-5">
                <p>AGENCY</p>
                <?php
                $client = json_decode($row["agency"]);
                for ($x = 0; $x <= 4; $x++){
                  if ($client[$x] == ""){
                  echo  '<p></p>';
                } else if($client[$x] == ""){
                  echo '<p></p>';
                } else{
                  echo '<p>'.$client[$x].'</p>';
                }
                }
                ?>
              </div>
            </div><!-- End of week -->
            <div class="col-sm-12 resourse1">
              <div class="col-sm-offset-2 col-sm-5">
                <p>WEEK 3</p>
                <?php
                for ($x = 10; $x <= 14; $x++){
                  if ($avStatus[$x] == "available"){
                  echo  '<a class="circle available"></a>';
                } else if($avStatus[$x] == "halftime"){
                  echo '<a class="circle half_booked"></a>';
                } else{
                  echo '<a class="circle booked"></a>';
                }
                }
                ?>
              </div>
              <div class="col-sm-5">
                <p>AGENCY</p>
                <?php
                $client = json_decode($row["agency"]);
                for ($x = 0; $x <= 4; $x++){
                  if ($client[$x] == ""){
                  echo  '<p></p>';
                } else if($client[$x] == ""){
                  echo '<p></p>';
                } else{
                  echo '<p>'.$client[$x].'</p>';
                }
                }
                ?>
              </div>
            </div><!-- End of week -->
            <div class="col-sm-12 resourse2">
              <div class="col-sm-offset-2 col-sm-5">
                <p>WEEK 4</p>
                <?php
                for ($x = 15; $x <= 19; $x++){
                  if ($avStatus[$x] == "available"){
                  echo  '<a class="circle available"></a>';
                } else if($avStatus[$x] == "halftime"){
                  echo '<a class="circle half_booked"></a>';
                } else{
                  echo '<a class="circle booked"></a>';
                }
                }
              }
                ?>
              </div>
              <div class="col-sm-5">
                <p>AGENCY</p>
                <?php
                $client = json_decode($row["agency"]);
                for ($x = 0; $x <= 4; $x++){
                  if ($client[$x] == ""){
                  echo  '<p></p>';
                } else if($client[$x] == ""){
                  echo '<p></p>';
                } else{
                  echo '<p>'.$client[$x].'</p>';
                }
                }
                ?>
              </div>
            </div><!-- End of week -->
        </div>
      </div><!-- End of Available Resourses -->
      <div class="col-sm-12 buttonContainer">
      <p class="bookButton">BOOK NOW</p>
    </div>
        <div class="col-sm-12 prodigiousLogo">
          <img src="images/prodigious_logo.svg" />
        </div><!-- End of Prodigious Logo -->
      </div><!-- End of innerContainer -->
<? include 'footer.php'; ?>
