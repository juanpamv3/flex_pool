<?php
$mysqli = new mysqli("localhost", "root", "root", "flex_pool_db");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {

} ?>
<?php include 'header.php'; ?>
      <div class="col-sm-offset-2 col-sm-8 innerContainer">
        <div class="col-sm-12 resoursesMainBlock">
          <img src="../images/design_icon.png" class="main_icon" />
          <h1>DESIGN | RESOURSES</h1>
          <p>Select one role to see full availability</p>
        </div><!-- End of categories -->


        <div class="col-sm-12 designResoursesBlock">

          <div class="col-sm-4" style="width: auto; padding-right: 10px;" id="sectionHeader">
            <h4>AVAILABLE</h4>
          </div>
          <div class="row hrContainer">
            <hr class="primaryHr"/>
          </div>
          <!-- Resourses Block -->
          <div class="col-sm-12">
            <!-- Resourses header -->
            <div class="col-sm-12 resourse1 hidden-xs">
              <div class="col-sm-1">
                <p>SITE</p>
              </div>
              <div class="col-sm-3">
                <p>NAME</p>
              </div>
              <div class="col-sm-3">
                <p>ROLE</p>
              </div>
              <div class="col-sm-5">
                <p>ACTIONS</p>
              </div>
            </div><!-- End of Resourses header --> 

            <div class="col-sm-12 resourse1">
              <div class="col-xs-2 mobile_options visible-xs-block">
                <div class="visible-xs-block"><span class="glyphicon glyphicon-globe option-icon"></span></div><p class="hidden-xs">SITE</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon-user option-icon"></span></div><p class="hidden-xs">NAME</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon-briefcase option-icon"></span></div><p class="hidden-xs">ROLE</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon glyphicon-edit option-icon"></span></div><p class="hidden-xs">ACTIONS</p>
              </div>
              <div class="col-sm-1">
                <p>CR</p>
              </div>
              <div class="col-sm-3">
                <p class="redHighlight">Nombre</p>
              </div>
              <div class="col-sm-3">
                <p class="redHighlight">Creative Designer</p>
              </div>
              <div class="col-sm-5">
                <a href="#" class="redBtn"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="hidden-xs"> Delete</span></a>
                <a href="#" class="redBtn"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="hidden-xs"> Availability</span></a>
              </div>
            </div><!-- End of Resourse -->
            <div class="col-sm-12 resourse2">
              <div class="col-xs-2 mobile_options visible-xs-block">
                <div class="visible-xs-block"><span class="glyphicon glyphicon-globe option-icon"></span></div><p class="hidden-xs">SITE</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon-user option-icon"></span></div><p class="hidden-xs">NAME</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon-briefcase option-icon"></span></div><p class="hidden-xs">ROLE</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon glyphicon-edit option-icon"></span></div><p class="hidden-xs">ACTIONS</p>
              </div>
              <div class="col-sm-1">
                <p>CR</p>
              </div>
              <div class="col-sm-3">
                <p class="redHighlight">Nombre</p>
              </div>
              <div class="col-sm-3">
                <p class="redHighlight">Creative Designer</p>
              </div>
              <div class="col-sm-5">
                <a href="#" class="redBtn"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="hidden-xs"> Delete</span></a>
                <a href="#" class="redBtn"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="hidden-xs"> Availability</span></a>
              </div>
            </div><!-- End of Resourse -->
            <div class="col-sm-12 resourse1">
              <div class="col-xs-2 mobile_options visible-xs-block">
                <div class="visible-xs-block"><span class="glyphicon glyphicon-globe option-icon"></span></div><p class="hidden-xs">SITE</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon-user option-icon"></span></div><p class="hidden-xs">NAME</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon-briefcase option-icon"></span></div><p class="hidden-xs">ROLE</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon glyphicon-edit option-icon"></span></div><p class="hidden-xs">ACTIONS</p>
              </div>
              <div class="col-sm-1">
                <p>CR</p>
              </div>
              <div class="col-sm-3">
                <p class="redHighlight">Nombre</p>
              </div>
              <div class="col-sm-3">
                <p class="redHighlight">Creative Designer</p>
              </div>
              <div class="col-sm-5">
                <a href="#" class="redBtn"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="hidden-xs"> Delete</span></a>
                <a href="#" class="redBtn"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="hidden-xs"> Availability</span></a>
              </div>
            </div><!-- End of Resourse -->
            <div class="col-sm-12 resourse2">
              <div class="col-xs-2 mobile_options visible-xs-block">
                <div class="visible-xs-block"><span class="glyphicon glyphicon-globe option-icon"></span></div><p class="hidden-xs">SITE</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon-user option-icon"></span></div><p class="hidden-xs">NAME</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon-briefcase option-icon"></span></div><p class="hidden-xs">ROLE</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon glyphicon-edit option-icon"></span></div><p class="hidden-xs">ACTIONS</p>
              </div>
              <div class="col-sm-1">
                <p>CR</p>
              </div>
              <div class="col-sm-3">
                <p class="redHighlight">Nombre</p>
              </div>
              <div class="col-sm-3">
                <p class="redHighlight">Creative Designer</p>
              </div>
              <div class="col-sm-5">
                <a href="#" class="redBtn"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="hidden-xs"> Delete </span></a>
                <a href="#" class="redBtn"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="hidden-xs"> Availability</span></a>
              </div>
            </div><!-- End of Resourse -->
            <div class="col-sm-12 resourse1">
              <div class="col-xs-2 mobile_options visible-xs-block">
                <div class="visible-xs-block"><span class="glyphicon glyphicon-globe option-icon"></span></div><p class="hidden-xs">SITE</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon-user option-icon"></span></div><p class="hidden-xs">NAME</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon-briefcase option-icon"></span></div><p class="hidden-xs">ROLE</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon glyphicon-edit option-icon"></span></div><p class="hidden-xs">ACTIONS</p>
              </div>
              <div class="col-sm-1">
                <p>CR</p>
              </div>
              <div class="col-sm-3">
                <p class="redHighlight">Nombre</p>
              </div>
              <div class="col-sm-3">
                <p class="redHighlight">Creative Designer</p>
              </div>
              <div class="col-sm-5">
                <a href="#" class="redBtn"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="hidden-xs"> Delete</span></a>
                <a href="#" class="redBtn"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="hidden-xs"> Availability</span></a>
              </div>
            </div><!-- End of Resourse -->

            <div class="col-sm-12 resourse2">
              <div class="col-xs-2 mobile_options visible-xs-block">
                <div class="visible-xs-block"><span class="glyphicon glyphicon-globe option-icon"></span></div><p class="hidden-xs">SITE</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon-user option-icon"></span></div><p class="hidden-xs">NAME</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon-briefcase option-icon"></span></div><p class="hidden-xs">ROLE</p>
                <div class="visible-xs-block"><span class="glyphicon glyphicon glyphicon-edit option-icon"></span></div><p class="hidden-xs">ACTIONS</p>
              </div>
              <div class="col-sm-1">
                <p>CR</p>
              </div>
              <div class="col-sm-3">
                <p class="redHighlight">Nombre</p>
              </div>
              <div class="col-sm-3">
                <p class="redHighlight">Creative Designer</p>
              </div>
              <div class="col-sm-5">
                <a href="#" class="redBtn"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="hidden-xs"> Delete</span></a>
                <a href="#" class="redBtn"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="hidden-xs"> Availability</span></a>
              </div>
            </div><!-- End of Resourse -->
        </div>
      </div><!-- End of Available Resourses -->

            <div class="col-sm-12 designResoursesBlock"><!-- BOOKED resourses BOX -->
              <div class="col-sm-2" style="width: auto; padding-right: 10px;" id="sectionHeader">
                <h4>BOOKED</h4>
              </div>
              <div class="row hrContainer">
                <hr class="primaryHr"/>
              </div>
              <!-- Resourses Block -->
              <div class="col-sm-12">
                <!-- Resourses header -->
                <div class="col-sm-12 resourse1 hidden-xs">
                  <div class="col-sm-1">
                    <p>SITE</p>
                  </div>
                  <div class="col-sm-3">
                    <p>NAME</p>
                  </div>
                  <div class="col-sm-3">
                    <p>ROLE</p>
                  </div>
                  <div class="col-sm-5">
                    <p>ACTIONS</p>
                  </div>
                </div><!-- End of Resourses header -->
                <div class="col-sm-12 resourse1">
                  <div class="col-xs-2 mobile_options visible-xs-block">
                    <div class="visible-xs-block"><span class="glyphicon glyphicon-globe option-icon"></span></div><p class="hidden-xs">SITE</p>
                    <div class="visible-xs-block"><span class="glyphicon glyphicon-user option-icon"></span></div><p class="hidden-xs">NAME</p>
                    <div class="visible-xs-block"><span class="glyphicon glyphicon-briefcase option-icon"></span></div><p class="hidden-xs">ROLE</p>
                    <div class="visible-xs-block"><span class="glyphicon glyphicon glyphicon-edit option-icon"></span></div><p class="hidden-xs">ACTIONS</p>
                  </div>
                  <div class="col-sm-1">
                    <p>CR</p>
                  </div>
                  <div class="col-sm-3">
                    <p class="redHighlight">Nombre</p>
                  </div>
                  <div class="col-sm-3">
                    <p class="redHighlight">Creative Designer</p>
                  </div>
                  <div class="col-sm-5">
                    <a href="#" class="redBtn"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="hidden-xs"> Delete</span></a>
                    <a href="#" class="redBtn"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="hidden-xs"> Availability</span></a>
                 </div>
                </div><!-- End of Resourse -->
                <div class="col-sm-12 resourse2">
                  <div class="col-xs-2 mobile_options visible-xs-block">
                    <div class="visible-xs-block"><span class="glyphicon glyphicon-globe option-icon"></span></div><p class="hidden-xs">SITE</p>
                    <div class="visible-xs-block"><span class="glyphicon glyphicon-user option-icon"></span></div><p class="hidden-xs">NAME</p>
                    <div class="visible-xs-block"><span class="glyphicon glyphicon-briefcase option-icon"></span></div><p class="hidden-xs">ROLE</p>
                    <div class="visible-xs-block"><span class="glyphicon glyphicon glyphicon-edit option-icon"></span></div><p class="hidden-xs">ACTIONS</p>
                  </div>
                  <div class="col-sm-1">
                    <p>CR</p>
                  </div>
                  <div class="col-sm-3">
                    <p class="redHighlight">Nombre</p>
                  </div>
                  <div class="col-sm-3">
                    <p class="redHighlight">Creative Designer</p>
                  </div>
                  <div class="col-sm-5">
                    <a href="#" class="redBtn"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="hidden-xs"> Delete</span></a>
                    <a href="#" class="redBtn"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="hidden-xs"> Availability</span></a>
                 </div>
                </div><!-- End of Resourse -->
                <div class="col-sm-12 resourse1">
                  <div class="col-xs-2 mobile_options visible-xs-block">
                    <div class="visible-xs-block"><span class="glyphicon glyphicon-globe option-icon"></span></div><p class="hidden-xs">SITE</p>
                    <div class="visible-xs-block"><span class="glyphicon glyphicon-user option-icon"></span></div><p class="hidden-xs">NAME</p>
                    <div class="visible-xs-block"><span class="glyphicon glyphicon-briefcase option-icon"></span></div><p class="hidden-xs">ROLE</p>
                    <div class="visible-xs-block"><span class="glyphicon glyphicon glyphicon-edit option-icon"></span></div><p class="hidden-xs">ACTIONS</p>
                  </div>
                  <div class="col-sm-1">
                    <p>CR</p>
                  </div>
                  <div class="col-sm-3">
                    <p class="redHighlight">Nombre</p>
                  </div>
                  <div class="col-sm-3">
                    <p class="redHighlight">Creative Designer</p>
                  </div>
                  <div class="col-sm-5">
                    <a href="#" class="redBtn"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="hidden-xs"> Delete</span></a>
                    <a href="#" class="redBtn"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="hidden-xs"> Availability</span></a>
                 </div>
                </div><!-- End of Resourse -->
                <div class="col-sm-12 resourse2">
                  <div class="col-xs-2 mobile_options visible-xs-block">
                    <div class="visible-xs-block"><span class="glyphicon glyphicon-globe option-icon"></span></div><p class="hidden-xs">SITE</p>
                    <div class="visible-xs-block"><span class="glyphicon glyphicon-user option-icon"></span></div><p class="hidden-xs">NAME</p>
                    <div class="visible-xs-block"><span class="glyphicon glyphicon-briefcase option-icon"></span></div><p class="hidden-xs">ROLE</p>
                    <div class="visible-xs-block"><span class="glyphicon glyphicon glyphicon-edit option-icon"></span></div><p class="hidden-xs">ACTIONS</p>
                  </div>
                  <div class="col-sm-1">
                    <p>CR</p>
                  </div>
                  <div class="col-sm-3">
                    <p class="redHighlight">Nombre</p>
                  </div>
                  <div class="col-sm-3">
                    <p class="redHighlight">Creative Designer</p>
                  </div>
                  <div class="col-sm-5">
                    <a href="#" class="redBtn"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="hidden-xs"> Delete</span></a>
                    <a href="#" class="redBtn"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="hidden-xs"> Availability</span></a>
                 </div>
                </div><!-- End of Resourse -->
                <div class="col-sm-12 resourse1">
                  <div class="col-xs-2 mobile_options visible-xs-block">
                    <div class="visible-xs-block"><span class="glyphicon glyphicon-globe option-icon"></span></div><p class="hidden-xs">SITE</p>
                    <div class="visible-xs-block"><span class="glyphicon glyphicon-user option-icon"></span></div><p class="hidden-xs">NAME</p>
                    <div class="visible-xs-block"><span class="glyphicon glyphicon-briefcase option-icon"></span></div><p class="hidden-xs">ROLE</p>
                    <div class="visible-xs-block"><span class="glyphicon glyphicon glyphicon-edit option-icon"></span></div><p class="hidden-xs">ACTIONS</p>
                  </div>
                  <div class="col-sm-1">
                    <p>CR</p>
                  </div>
                  <div class="col-sm-3">
                    <p class="redHighlight">Nombre</p>
                  </div>
                  <div class="col-sm-3">
                    <p class="redHighlight">Creative Designer</p>
                  </div>
                  <div class="col-sm-5">
                    <a href="#" class="redBtn"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="hidden-xs"> Delete</span></a>
                    <a href="#" class="redBtn"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="hidden-xs"> Availability</span></a>
                 </div>
                </div><!-- End of Resourse -->

                <div class="col-sm-12 resourse2">
                  <div class="col-xs-2 mobile_options visible-xs-block">
                    <div class="visible-xs-block"><span class="glyphicon glyphicon-globe option-icon"></span></div><p class="hidden-xs">SITE</p>
                    <div class="visible-xs-block"><span class="glyphicon glyphicon-user option-icon"></span></div><p class="hidden-xs">NAME</p>
                    <div class="visible-xs-block"><span class="glyphicon glyphicon-briefcase option-icon"></span></div><p class="hidden-xs">ROLE</p>
                    <div class="visible-xs-block"><span class="glyphicon glyphicon glyphicon-edit option-icon"></span></div><p class="hidden-xs">ACTIONS</p>
                  </div>
                  <div class="col-sm-1">
                    <p>CR</p>
                  </div>
                  <div class="col-sm-3">
                    <p class="redHighlight">Nombre</p>
                  </div>
                  <div class="col-sm-3">
                    <p class="redHighlight">Creative Designer</p>
                  </div>
                  <div class="col-sm-5">
                    <a href="#" class="redBtn"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="hidden-xs"> Delete</span></a>
                    <a href="#" class="redBtn"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="hidden-xs"> Availability</span></a>
                 </div>
                </div><!-- End of Resourse -->
            </div>

        </div>



        <div class="col-sm-12 prodigiousLogo">
          <img src="../images/prodigious_logo.svg" />
        </div><!-- End of Prodigious Logo -->
      </div><!-- End of innerContainer -->
  <?php include 'footer.php'; ?>