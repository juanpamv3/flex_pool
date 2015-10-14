<?php
// include actions archive for set day of the week
include '../scripts/actions.php';

$connection = connect("localhost", "root", "root", "flex_pool_db");
$date = date('D');
$today = setDay($date);

include 'header.php';
?>
      <div class="col-sm-offset-2 col-sm-8 innerContainer">
        <div class="col-sm-12 resoursesMainBlock">
          <img src="../images/development_icon.png" class="main_icon" />
          <h1>DEVELOPMENT | RESOURSES</h1>
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
            <?php adminGetAvailable($connection, $today, 3) ?>
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
                <?php
                adminGetUnvailable($connection, $today, 3)
                ?>
            </div>

        </div>



        <div class="col-sm-12 prodigiousLogo">
          <img src="../images/prodigious_logo.svg" />
        </div><!-- End of Prodigious Logo -->
      </div><!-- End of innerContainer -->
<? include 'footer.php'; ?>
<script>
// delete
  $('a').click(function(){
    var rowNumber = $(this).data('rownumber');
    $.post( "../scripts/deleteUser.php", { _id: rowNumber } );
    $(this).remove();
  });
</script>
