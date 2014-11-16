
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <br>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <div class="panel panel-default">
              <div class="panel-body">

                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Evangelios</th>
                      <th>Fecha</th>
                    </tr>
                  </thead>
                  <tbody id="lista-evangelios">
                    <!-- Aquí va toda la lista de evangelios -->
                  </tbody>
                </table>
                
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bower_components/dist/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>
    <script id="evangelios" type="text/x-jquery-template">
      <tr>
          <td>${evangelio_contenido}</td>
          <td>${evangelio_fecha}</td>
        </tr>
    </script>


    <script type="text/javascript">
      $(document).on('ready', inicio);

      function inicio(){
        $.ajax({
          url:'seleccionar.php',
          data: {tipoSeleccionar:'listar_evangelios'},
          type: 'GET',
          dataType: 'json',
          success: function(data){
            console.log(data);
            $('#evangelios').tmpl(data).appendTo('#lista-evangelios');
          }
        })
      }
    </script>
  </body>
</html>