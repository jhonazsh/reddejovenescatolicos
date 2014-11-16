<?php include('conexion_bd.php'); ?>

<?php 

$tipo_seleccionar = $_GET['tipoSeleccionar'];

if(isset($tipo_seleccionar) && !empty($tipo_seleccionar)) {
	switch($tipo_seleccionar) {
        case 'seleccionar_evangelio' : seleccionarEvangelios($con);break; 
        case 'listar_evangelios' : listarEvangelios($con); break;
    }
}

function seleccionarEvangelios($con){
	
	
	$sql = mysqli_query($con,"SELECT * FROM evangelios WHERE evangelio_fecha='$_GET[fechaHoy]' ");
	$arreglo_evangelios = array();
	
	while($row = mysqli_fetch_assoc($sql)){
		$arreglo_evangelios[] = $row;
	}

	echo json_encode($arreglo_evangelios);
}

function listarEvangelios($con){
	$sql = mysqli_query($con,"SELECT * FROM evangelios ");
	$lista_evangelios = array();
	
	while($row = mysqli_fetch_assoc($sql)){
		$lista_evangelios[] = $row;
	}

	echo json_encode($lista_evangelios);
}

?>