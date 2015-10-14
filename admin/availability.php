<?php
// actions
include '../scripts/actions.php';

$connection = connect("localhost", "root", "root", "flex_pool_db");
$idNumber = $_GET['id'];

$sql = "SELECT id, name, country, role, skills, availability, agency, category FROM profiles WHERE id = $idNumber";
$result = $connection->query($sql);
while($row = $result->fetch_array()) {


// header
include 'header.php';
?>
      <div class="col-sm-offset-2 col-sm-8 innerContainer">
        <div class="col-sm-12 resoursesMainBlock">
          <div id="add-profile-icon">
            <span class="glyphicon glyphicon-pencil"></span>
          </div>
        </div><!-- End of categories -->

        <div class="col-sm-12 designResoursesBlock"><!-- availables resourses BOX -->
          <div class="col-sm-4" style="width: auto; padding-right: 10px;" id="sectionHeader">
            <h4>Edit Profile</h4>
          </div>
          <div class="row hrContainer">
            <hr class="primaryHr"/>
          </div>
          <!-- Resourses Block -->
          <form id="profile_form">
            <div class="col-sm-12">
              <div class="col-sm-12 resourse1">
                <div class="col-sm-3 col-md-2">
                  <label for="name" class="primaryHighlight">Name</label>
                </div>
                <div class="col-sm-9">
                  <input type="text" name="name" id="name" value="<?php echo $row["name"]; ?>">
                </div>
              </div><!-- End of Resourse -->
              <div class="col-sm-12 resourse2">
                <div class="col-sm-3 col-md-2">
                  <label for="country" class="primaryHighlight">Country</label>
                </div>
                <div class="col-sm-9">
                  <!--<p>CR</p>-->
                  <select name="country" id="country">
                    <?php
                    switch ($row["country"]) {
                        case 'CR':
                            echo '<option selected value="Costa Rica">CR</option>
                                  <option value="Colombia">COL</option>
                                  <option value="MU">MU</option>';
                            break;
                        case 'COL':
                              echo '<option value="Costa Rica">CR</option>
                              <option selected value="Colombia">COL</option>
                              <option value="MU">MU</option>';
                            break;
                        case 'MU':
                            echo '<option value="Costa Rica">CR</option>
                            <option value="Colombia">COL</option>
                            <option selected value="MU">MU</option>';
                            break;
                        default:
                        echo '<option selected value="Costa Rica">CR</option>
                              <option value="Colombia">COL</option>
                              <option value="MU">MU</option>';
                    }

                    ?>
                  </select>
                </div>
              </div><!-- End of Resourse -->
              <div class="col-sm-12 resourse1">
               <div class="col-sm-3 col-md-2">
                  <label for="category" class="primaryHighlight">Category</label>
               </div>
               <div class="col-sm-9">
                  <!--<p>CR</p>-->
                  <select name="category" id="category">
                    <?php
                    switch ($row["category"]) {
                        case '1':
                            echo '<option selected value="1">Design</option>
                                  <option value="2">Motion</option>
                                  <option value="3">Development</option>
                                  <option value="4">QA</option>';
                            break;
                        case '2':
                              echo '<option value="1">Design</option>
                                    <option selected value="2">Motion</option>
                                    <option value="3">Development</option>
                                    <option value="4">QA</option>';
                            break;
                        case '3':
                            echo '<option value="1">Design</option>
                                  <option value="2">Motion</option>
                                  <option selected value="3">Development</option>
                                  <option value="4">QA</option>';
                            break;
                        default:
                        echo '<option value="1">Design</option>
                              <option value="2">Motion</option>
                              <option value="3">Development</option>
                              <option selected value="4">QA</option>';
                    }
                    ?>
                  </select>
                </div>
              </div><!-- End of Resourse -->
              <div class="col-sm-12 resourse2">
                <div class="col-sm-3 col-md-2">
                  <label for="country" class="primaryHighlight">Role</label>
                </div>
                <div class="col-sm-9">
                  <!--<p>CR</p>-->
                  <select name="role" id="role">
                    <option value="Front-End Engineer">Front-End Engineer</option>
                    <option value="Senior Front-End Engineer">Senior Front-End Engineer</option>
                    <option value="Software Engineer">Software Engineer</option>
                    <option value="Senior Software Engineer">Senior Software Engineer</option>
                    <option value="Creative Enginner">Creative Engineer</option>
                    <option value="Senior Creative Engineer">Senior Creative Engineer</option>
                    <option value="Creative Designer">Creative Designer</option>
                    <option value="Senior Creative Designer">Senior Creative Designer</option>
                    <option value="Email / Web Engineer">Email / Web Engineer</option>
                    <option value="Senior Email / Web Engineer">Senior Email / Web Engineer</option>
                    <option value="Creative QA Analyst">Creative QA Analyst</option>
                    <option value="Senior Creative QA Analyst">Senior Creative QA Analyst</option>
                    <option value="Functional QA Analyst">Functional QA Analyst</option>
                    <option value="Senior Functional QA Analyst">Senior Functional QA Analyst</option>
                  </select>
                </div>
              </div><!-- End of Resourse -->
              <div class="col-sm-12 resourse1">
                <div class="col-sm-3 col-md-2">
                  <label class="primaryHighlight">Skills</label>
                </div>
                <div class="col-sm-9">
                  <!--<p>UI, Graphic / Web Design, Email Template Design, Branding, Image Editing, digital Assets, HTML/CSS, Ilustration.</p>-->
                  <textarea name="skills" id="skills" ><?php echo $row["skills"]; ?></textarea>
                </div>
              </div><!-- End of Resourse -->
              <div class="col-sm-12 resourse2">
                <div class="col-sm-2 col-md-2">
                  <label class="primaryHighlight">Availability</label>
                </div>
                <div class="col-sm-offset-1 col-sm-4" id="week1">
                  <p>WEEK 1</p>
                  <?php
                  $avStatus = json_decode($row["availability"]);
                  for ($x = 0; $x <= 4; $x++){
                    if ($avStatus[$x] == "available"){
                    echo  '<a href="#" class="circle available '.$x.' "></a>';
                  } else if($avStatus[$x] == "halftime"){
                    echo '<a href="#" class="circle half_booked '.$x.'"></a>';
                  } else{
                    echo '<a href="#" class="circle booked '.$x.'"></a>';
                  }
                  }
                  ?>
                </div>
                <div class="col-sm-4">
                  <p>AGENCY</p>
                  <div class="form-group">
                    <input type="text" name="agency1" class="form-control" value="<?php
                    $client = json_decode($row["agency"]);
                    for ($x = 0; $x <= 4; $x++){
                      if ($client[$x] == ""){
                        echo "available, ";
                    } else if($client[$x] == ""){

                    } else{
                      echo $client[$x].", ";
                    }
                    }
                    ?>">
                  </div>
                </div>
              </div><!-- End of week1 -->
              <div class="col-sm-12 resourse1" id="week2">
                <div class="col-sm-offset-3 col-sm-4">
                  <p>WEEK 2</p>
                  <?php
                  $avStatus = json_decode($row["availability"]);
                  for ($x = 5; $x <= 9; $x++){
                    if ($avStatus[$x] == "available"){
                    echo  '<a href="#" class="circle available '.$x.' "></a>';
                  } else if($avStatus[$x] == "halftime"){
                    echo '<a href="#" class="circle half_booked '.$x.'"></a>';
                  } else{
                    echo '<a href="#" class="circle booked '.$x.'"></a>';
                  }
                  }
                  ?>
                </div>
                <div class="col-sm-4">
                  <p>AGENCY</p>
                  <div class="form-group">
                    <input type="text" name="agency2" class="form-control" value="<?php
                    $client = json_decode($row["agency"]);
                    for ($x = 5; $x <= 9; $x++){
                      if ($client[$x] == ""){
                        echo "available, ";
                    } else if($client[$x] == ""){

                    } else{
                      echo $client[$x].", ";
                    }
                    }
                    ?>">
                  </div>
                </div>
              </div><!-- End of week -->
              <div class="col-sm-12 resourse2" id="week3">
                <div class="col-sm-offset-3 col-sm-4">
                  <p>WEEK 3</p>
                  <?php
                  $avStatus = json_decode($row["availability"]);
                  for ($x = 10; $x <= 14; $x++){
                    if ($avStatus[$x] == "available"){
                    echo  '<a href="#" class="circle available '.$x.' "></a>';
                  } else if($avStatus[$x] == "halftime"){
                    echo '<a href="#" class="circle half_booked '.$x.'"></a>';
                  } else{
                    echo '<a href="#" class="circle booked '.$x.'"></a>';
                  }
                  }
                  ?>
                </div>
                <div class="col-sm-4">
                  <p>AGENCY</p>
                  <div class="form-group">
                    <input type="text" name="agency3" class="form-control" value="<?php
                    $client = json_decode($row["agency"]);
                    for ($x = 10; $x <= 14; $x++){
                      if ($client[$x] == ""){
                        echo "available, ";
                    } else if($client[$x] == ""){

                    } else{
                      echo $client[$x].", ";
                    }
                    }
                    ?>">
                  </div>
                </div>
              </div><!-- End of week -->
              <div class="col-sm-12 resourse1" id="week4">
                <div class="col-sm-offset-3 col-sm-4">
                  <p>WEEK 4</p>
                  <?php
                  $avStatus = json_decode($row["availability"]);
                  for ($x = 15; $x <= 19; $x++){
                    if ($avStatus[$x] == "available"){
                    echo  '<a href="#" class="circle available '.$x.' "></a>';
                  } else if($avStatus[$x] == "halftime"){
                    echo '<a href="#" class="circle half_booked '.$x.'"></a>';
                  } else{
                    echo '<a href="#" class="circle booked '.$x.'"></a>';
                  }
                  }
                  ?>
                </div>
                <div class="col-sm-4">
                  <p>AGENCY</p>
                  <div class="form-group">
                    <input type="text" name="agency4" class="form-control" value="<?php
                    $client = json_decode($row["agency"]);
                    for ($x = 15; $x <= 19; $x++){
                      if ($client[$x] == ""){
                        echo "available, ";
                    } else if($client[$x] == ""){

                    } else{
                      echo $client[$x].", ";
                    }
                    }

                    ?>">
                  </div>
                </div>
              </div><!-- End of week -->
          </div>
          <div class="col-sm-12 buttonContainer">
            <a href="#" class="bookButton" id="availability_btn">Edit Profile</a>
          </div>
        </div><!-- End of Available Resourses -->
      </form>

      <div class="col-sm-12 prodigiousLogo">
          <img src="../images/prodigious_logo.svg" />
        </div><!-- End of Prodigious Logo -->
      </div><!-- End of innerContainer -->
<?php include 'footer.php'; ?>
<script>
  $(document).ready(function() {
      var resourseRole = '<?php echo $row["role"]; } ?>'; //Don't forget the extra semicolon!
      $('#role').val(resourseRole).prop('selected', true);
  });
</script>
