<?php
// include actions archive for set day of the week
include 'scripts/actions.php';

$connection = connect("localhost", "root", "root", "flex_pool_db");
$date = date('D');
$today = setDay($date);
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
            getAvailable($connection, $today, 1);
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
          getUnvailable($connection, $today, 1);
           ?>
      </div>
    </div><!-- End of BOOKED Resourses -->

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
