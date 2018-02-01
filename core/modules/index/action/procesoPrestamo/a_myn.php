<?php
	$iniciar = true;
	if(strtotime($_POST["fecha_inicio"])>strtotime($_POST["fecha_fin"])){
	$iniciar=false;
	}
	if( $iniciar && isset($_SESSION["prestar"])){
		$prestar = $_SESSION["prestar"];
		if(count($prestar)>0){

			foreach($prestar as  $pres){

				$prestamo = new DatosPrestamo();
				$prestamo->id_ejemplar = $pres["id_ejemplar"] ;
				$prestamo->id_universitario = $_POST["id_universitario"];
				$prestamo->fecha_inicio = $_POST["fecha_inicio"];
				$prestamo->fecha_fin = $_POST["fecha_fin"];
				$prestamo->id_usuario=$_SESSION["id_usuario"];
				$add = $prestamo->agregar();

				$ejemplar = DatosEjemplar::getById($pres["id_ejemplar"]);
				$ejemplar->unavaiable();

				unset($_SESSION["prestar"]);
				setcookie("selled","selled");
			}
		}
	}
	if($iniciar){
		print "<script>window.location='index.php?view=prestamo';</script>";
	}else{
		print "<script>alert('Rango de fecha no es valido.');</script>";
		print "<script>window.location='index.php?view=prestamo';</script>";
	}
?>
