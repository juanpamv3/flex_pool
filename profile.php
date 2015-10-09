<?php

  $mysqli = new mysqli("localhost", "root", "root", "flex_pool_db");
  if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  } else {

  }
  $idNumber = $_GET['id'];
  $sql = "SELECT id, name, country, role, skills, availability, agency, category FROM profiles WHERE id = $idNumber";
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

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="col-sm-offset-2 col-sm-8 innerContainer">
        <!-- header -->
        <header class="col-sm-12">
          <div class="col-sm-3 logo">
            <img src="images/flex-pool-logo.gif" />
          </div>
          <nav class="col-sm-9">
            <ul>
              <li>All</li>
              <li>DESIGN</li>
              <li>MOTION DESIGN</li>
              <li>DEVELOPMENT</li>
              <li>QA ANALYST</li>
            </ul>
          </nav>
        </header><!-- End of header -->
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
                <p/>
                <?php
                $client = json_decode($row["agency"]);
                for ($x = 0; $x <= 4; $x++){
                  if ($client[$x] == ""){

                } else if($client[$x] == ""){

                } else{
                  echo $client[$x];
                }
                }
                ?>
              </p>
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
                <p>
                <?php
                $client = json_decode($row["agency"]);
                for ($x = 5; $x <= 9; $x++){
                  if ($client[$x] == ""){

                } else if($client[$x] == ""){

                } else{
                  echo $client[$x].", ";
                }
                }
                ?>
              </p>
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
                <p>
                <?php
                $client = json_decode($row["agency"]);
                for ($x = 10; $x <= 14; $x++){
                  if ($client[$x] == ""){

                } else if($client[$x] == ""){

                } else{
                  echo $client[$x].", ";
                }
                }
                ?>
              </p>
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
                <p>
                <?php
                $client = json_decode($row["agency"]);
                for ($x = 15; $x <= 19; $x++){
                  if ($client[$x] == ""){

                } else if($client[$x] == ""){

                } else{
                  echo $client[$x].", ";
                }
                }
                ?>
              </p>
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
      <footer class="col-sm-12">
        <div class="col-sm-offset-2 col-sm-8 footerInnerContainer">
          <div class="col-sm-12">
              <p>Staff Allocation | Status</p>
              <div class="col-sm-4 table-responsive footerContactBlock rightLine">
                <table class="table">
                  <tr>
                    <td><img src="images/questions.gif" /></td>
                    <td><b>Questions or issues:</b> <br/><a href="mailto:adrian.diaz@prodigious.com">adrian.diaz@prodigious.com</a></td>
                  </tr>
                </table>
              </div>
              <div class="col-sm-4 table-responsive footerContactBlock2 rightLine">
                <table class="table">
                  <tr>
                    <td><img src="images/questions.gif" /></td>
                    <td><b>MU Booking:</b> <br/><a href="mailto:rajeeb.gangoosingh@prodigious.mu">rajeeb.gangoosingh@prodigious.mu</a></td>
                  </tr>
                </table>
              </div>
              <div class="col-sm-4 table-responsive footerContactBlock2">
                <table class="table">
                  <tr>
                    <td><img src="images/questions.gif" /></td>
                    <td><b>Unit based and project work:</b> <br/><a href="mailto:ned.elmore@prodigious.com">ned.elmore@prodigious.com</a></td>
                  </tr>
                </table>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
