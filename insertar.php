<?php include('conexion_bd.php'); ?>
<?php

$tipo_insertar = $_POST['tipoInsertar'];

if(isset($tipo_insertar) && !empty($tipo_insertar)) {
	switch($tipo_insertar) {
        case 'insertar_evangelio' : insertarEvangelio($con);break; 
    }
}

function insertarEvangelio($con){
	$sql=mysqli_query($con,"INSERT INTO evangelios(evangelio_contenido,evangelio_fecha) VALUES ('$_POST[evangelioContenido]','$_POST[evangelioFecha]')");

	echo 'listo';
}

?>