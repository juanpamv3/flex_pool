<?php
// include actions archive for set day of the week
include 'scripts/actions.php';

$connection = connect("localhost", "root", "root", "flex_pool_db");
$date = date('D');
$today = setDay($date);
 ?>
<? include 'header.php'; ?>
        <!-- Categories -->
        <div class="col-sm-12 resoursesMainBlock">
          <img src="images/motion_icon.png" />
          <h1>MOTION | RESOURSES</h1>
          <p>Select one role to see full availability</p>

        </div><!-- End of categories -->

        <div class="col-sm-12 motionResoursesBlock"><!-- availables resourses BOX -->
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
            getAvailable($connection, $today, 2);
             ?>
        </div>
      </div><!-- End of Available Resourses -->

      <div class="col-sm-12 motionResoursesBlock"><!-- availables resourses BOX -->
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
          getUnvailable($connection, $today, 2);
           ?>
      </div>
    </div><!-- End of Available Resourses -->

        <div class="col-sm-12 prodigiousLogo">
          <img src="images/prodigious_logo.svg" />
        </div><!-- End of Prodigious Logo -->
      </div><!-- End of innerContainer -->
<? include 'footer.php'; ?>
