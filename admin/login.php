<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Flex Pool</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">

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
            <img src="../images/flex-pool-logo.gif" />
          </div>
        </header><!-- End of header -->
      </div>
      <div class="col-sm-offset-2 col-sm-8 innerContainer">
        <!-- Categories -->
        <div class="col-sm-12 form">
          <h1>Staff Allocation | Status</h1>
          <p>Administrator Login</p>
          <div class="col-sm-12 categoryContainer">
            <form action="../scripts/login.php" method="post" class="col-md-5">
            	<div class="form-group">
	            	<label for="_user">User name:</label>
	            	<input type="text" id="_user" name="_user" class="form-control" required>
	            </div>
	            <div class="form-group">
	            	<label for="_password">Password:</label>
	            	<input type="password" id="_password" name="_password" class="form-control" required>
	            </div>
	            	<button type="submit" class="btn btn-default">Login</button>
            </form>
          </div>
        </div><!-- End of categories -->
        <div class="col-sm-12 prodigiousLogo">
          <img src="../images/prodigious_logo.svg" />
        </div><!-- End of Prodigious Logo -->
      </div><!-- End of innerContainer -->
      <footer class="col-sm-12">
        <div class="col-sm-offset-2 col-sm-8 footerInnerContainer">
          <div class="col-sm-12">
              <p>Staff Allocation | Status</p>
              <div class="col-sm-4 table-responsive footerContactBlock rightLine">
                <table class="table">
                  <tr>
                    <td><img src="../images/questions.gif" /></td>
                    <td><b>Questions or issues:</b> <br/><a href="mailto:adrian.diaz@prodigious.com">adrian.diaz@prodigious.com</a></td>
                  </tr>
                </table>
              </div>
              <div class="col-sm-4 table-responsive footerContactBlock2 rightLine">
                <table class="table">
                  <tr>
                    <td><img src="../images/questions.gif" /></td>
                    <td><b>MU Booking:</b> <br/><a href="mailto:rajeeb.gangoosingh@prodigious.mu">rajeeb.gangoosingh@prodigious.mu</a></td>
                  </tr>
                </table>
              </div>
              <div class="col-sm-4 table-responsive footerContactBlock2">
                <table class="table">
                  <tr>
                    <td><img src="../images/questions.gif" /></td>
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
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
