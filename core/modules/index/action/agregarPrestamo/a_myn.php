<?php

	if(!isset($_SESSION["prestar"])){


		$libro = array("id_libro"=>$_POST["id_libro"],"id_ejemplar"=>$_POST["id_ejemplar"]);
		$_SESSION["prestar"] = array($libro);


		$prestar = $_SESSION["prestar"];



	}else {

		$encontrado = false;
		$prestar = $_SESSION["prestar"];
		$total=0;
		$variable = true;
	?>

	<?php
	if($variable==true){
	foreach($prestar as $c){
		if($c["id_libro"]==$_POST["id_libro"]){
			echo "encontrado";
			$encontrado=true;
			break;
		}
		$total++;
	}

	if($encontrado==false){
		$variable2 = count($prestar);
		$libro = array("id_libro"=>$_POST["id_libro"],"id_ejemplar"=>$_POST["id_ejemplar"]);
		$prestar[$variable2] = $libro;
	//	print_r($prestar);
		$_SESSION["prestar"] = $prestar;
	}else{
	print "<script>alert('El ejemplar ya esta agregado en la lista del Universitario');</script>";

	}

	}
	}
	print "<script>window.location='index.php?view=prestamo';</script>";
	// unset($_SESSION["prestar"]);

?>