<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Flex Pool</title>
  </head>
  <body>
    <div class="container">
      <div style="with: 1000px; height: 200px; float: left; background-color: #000;">
        <input type="submit" value="borrar" data-rownumber='1' class="deleteButton" />
      </div>
      <div style="with: 1000px; height: 200px; float: left; background-color: #000;">
        <input type="submit" value="borrar" data-rownumber='2' class="deleteButton" />
      </div>
      <div style="with: 1000px; height: 200px; float: left; background-color: #000;">
        <input type="submit" value="borrar" data-rownumber='3' class="deleteButton" />
      </div>
      <div style="with: 1000px; height: 200px; float: left; background-color: #000;">
        <input type="submit" value="borrar" data-rownumber='11' class="deleteButton" />
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
      $('input').click(function(){
        var rowNumber = $(this).data('rownumber');
        $.post( "../scripts/deleteUser.php", { _id: rowNumber } );
        $(this).remove();
      });
    </script>
  </body>
</html>
