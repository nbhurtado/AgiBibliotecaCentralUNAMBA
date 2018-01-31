<?php

	$arreglo = array();
	$prestamos = DatosPrestamo::getRents();
	foreach($prestamos as $prestamo){
		$ejemplar = DatosEjemplar::getById($prestamo->id_ejemplar);
		$libro = $ejemplar->getBook();

		$arreglo[] = array("title"=>$ejemplar->codigo." - ".$libro->titulo,"url"=>"","start"=>$event->fecha_inicio,"end"=>$event->fecha_fin);

	}

?>
<script>


	$(document).ready(function() {

		$('#calendario').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: '<?php echo date("Y-m-d");?>',
			editable: false,
			eventLimit: true, 
			events: <?php echo json_encode($arreglo); ?>
		});
		
	});

</script>


<div class="row">
<div class="col-md-12">
<h1>Vista de libros prestados por calendario</h1>
<div id="calendario"></div>

</div>
</div>
