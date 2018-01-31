<?php
$ejemplar = DatosEjemplar::getById($_GET["id"]);
$libro = $ejemplar->getBook();
?>
<div class="row">
	<div class="col-md-12">
		<h1><i class='fa fa-clock-o'></i> <?php echo $ejemplar->codigo." - ".$libro->titulo; ?> </h1>
<br>
<form class="form-horizontal" role="form">
<input type="hidden" name="view" value="historialEjemplar">
<input type="hidden" name="id" value="<?php echo $item->id; ?>">
  <div class="form-group">
    <div class="col-lg-3">
		<div class="input-group">
		  <span class="input-group-addon">INICIO</span>
		  <input type="date" name="fecha_inicio" required value="<?php if(isset($_GET["fecha_inicio"]) && $_GET["fecha_inicio"]!=""){ echo $_GET["fecha_inicio"]; } ?>" class="form-control">
		</div>
    </div>
    <div class="col-lg-3">
		<div class="input-group">
		  <span class="input-group-addon">FIN</span>
		  <input type="date" name="fecha_fin" required value="<?php if(isset($_GET["fecha_fin"]) && $_GET["fecha_fin"]!=""){ echo $_GET["fecha_fin"]; } ?>" class="form-control">
		</div>
    </div>
    <div class="col-lg-6">
    <button class="btn btn-primary btn-block">Procesar</button>
    </div>

  </div>
</form>
<?php
$historial = array();
if(isset($_GET["fecha_inicio"]) && $_GET["fecha_inicio"]!="" && isset($_GET["fecha_fin"]) && $_GET["fecha_fin"]!=""){
if($_GET["fecha_inicio"]<$_GET["fecha_inicio"]){
$historial = DatosPrestramo::getAllByItemIdAndRange($ejemplar->id,$_GET["fecha_inicio"],$_GET["fecha_fin"]);
}
}else{
$historial = DatosPrestramo::getAllByItemId($ejemplar->id);

}
if(count($historial)>0){
?>
<br>
<table class="table table-bordered table-hover	">
	<thead>
		<th>Ejemplar</th>
		<th>Libro</th>
		<th>Cliente</th>
		<th>Inicio</th>
		<th>Fin</th>
		<th>Regreso</th>
	</thead>
	<?php foreach($historial as $enviados):
		$ejemplar = $enviados->getItem();
		$libro = $ejemplar->getBook();
		$universitario = $enviados->getClient();
	?>
	<tr>
		<td style="width:30px;">
		<?php echo $ejemplar->codigo; ?>
		</td>
		<td>
		<?php echo $libro->titulo; ?>
		</td>
		<td>
		<?php echo $universitario->nombre." ".$universitario->apellidos; ?>
		</td>
		<td><?php echo $enviados->fecha_inicio; ?></td>
		<td><?php echo $enviados->fecha_fin; ?></td>
		<td><?php echo $enviados->fecha_retorno; ?></td>
	</tr>
<?php endforeach; ?>
</table>

<div class="clearfix"></div>

	<?php
}else{
	?>
	<p class="alert alert-danger">No hay prestamos.</p>
	<?php
}

?>
<br><br><br><br><br><br><br><br><br><br>
	</div>
</div>