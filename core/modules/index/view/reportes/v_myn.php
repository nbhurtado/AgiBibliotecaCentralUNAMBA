<div class="row">
	<div class="col-md-12">
<h1>Reportes</h1>
<br>
<form class="form-horizontal" role="form">
<input type="hidden" name="view" value="reportes">
  <div class="form-group">
    <div class="col-lg-3">
		<div class="input-group">
		  <span class="input-group-addon">FECHA INICIO</span>
		  <input type="date" name="fecha_inicio" value="<?php if(isset($_GET["fecha_inicio"]) && $_GET["fecha_inicio"]!=""){ echo $_GET["fecha_inicio"]; } ?>" class="form-control">
		</div>
    </div>
    <div class="col-lg-3">
		<div class="input-group">
		  <span class="input-group-addon">FECHA FIN</span>
		  <input type="date" name="fecha_fin" value="<?php if(isset($_GET["fecha_fin"]) && $_GET["fecha_fin"]!=""){ echo $_GET["fecha_fin"]; } ?>" class="form-control">
		</div>
    </div>
    <div class="col-lg-6">
    <button class="btn btn-primary btn-block">Procesar el Reporte</button>
    </div>

  </div>
</form>
<?php
if(isset($_GET["fecha_inicio"]) && $_GET["fecha_inicio"]!="" && isset($_GET["fecha_fin"]) && $_GET["fecha_fin"]!=""){
	$prestamos = DatosPrestamo::getByRange($_GET["fecha_inicio"],$_GET["fecha_fin"]);
		if(count($prestamos)>0){
			// si hay usuarios
			$_SESSION["report_data"] = $prestamos;
			?>
			<div class="panel panel-default">
			<div class="panel-heading">
			Reportes</div>
			<table class="table table-bordered table-hover">
			<thead>
			<th>Ejemplar</th>
			<th>Titulo</th>
			<th>Universitario</th>
			<th>Fecha</th>
			</thead>
			<?php
			$total = 0;
			foreach($prestamos as $prestamo){
				$ejemplar  = $prestamos->getItem();
				$universitario  = $prestamos->getClient();
				$libro = $prestamos->getBook();
				?>
				<tr>
				<td><?php echo $ejemplar->codigo; ?></td>
				<td><?php echo $libro->titulo; ?></td>
				<td><?php echo $universitario->nombre." ".$universitario->apellidos; ?></td>
				<td><?php echo $prestamos->fecha_retorno; ?></td>
				</tr>
				<?php

			}
			echo "</table>";
			?>
			<?php
		}else{
			echo "<p class='alert alert-danger'>No hay datos que mostrar.</p>";
		}
		}else{
			echo "<p class='alert alert-danger'>Debes seleccionar un rango de fechas.</p>";
		}


		?>


	</div>
</div>