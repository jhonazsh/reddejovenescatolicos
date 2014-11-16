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

    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="list-group">
            <div class="panel panel-default">
              <div class="panel-body">

                  <div class="form-group">
                    <label class="col-sm-12 control-label">Contenido Evangelio: </label>
                    <textarea class="form-control input-sm" rows="5" id="contenido"></textarea>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-12 control-label">Fecha: </label>
                    <input type="text" class="form-control input-sm" id="fecha">
                  </div>
                  
                  
                  <button class="btn btn-primary btn-sm" id="guardar">Guardar</button>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bower_components/dist/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).on('ready', inicio);

      function inicio(){
        var hoy = new Date();

        var dia = hoy.getDate();
        var mes = hoy.getMonth()+1;
        var anio = hoy.getFullYear();

        $('#fecha').val(dia+'/'+mes+'/'+anio);

        

      }

      $('#guardar').on('click', guardarEvangelio);

      function guardarEvangelio(){
        $.ajax({
          data:{tipoInsertar:'insertar_evangelio', evangelioContenido:$('#contenido').val(), evangelioFecha:$('#fecha').val()},
          url: 'insertar.php',
          type: 'POST',
          success: function(data){
            console.log(data);
          }
        });
      }
    </script>
  </body>
</html>