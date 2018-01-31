<?php
$universitario = ClientData::getById($_GET["id"]);
?>
<div class="row">
	<div class="col-md-12">
		<h1><i class='fa fa-clock-o'></i> <?php echo $universitario->nombre." ".$universitario->apellidos; ?> </h1>
<br>
<form class="form-horizontal" role="form">
<input type="hidden" name="view" value="itemhistory">
<input type="hidden" name="id" value="<?php echo $universitario->id; ?>">
  <div class="form-group">
    <div class="col-lg-3">
		<div class="input-group">
		  <span class="input-group-addon">FECHA_INICIO</span>
		  <input type="date" name="fecha_inicio" required value="<?php if(isset($_GET["fecha_inicio"]) && $_GET["fecha_inicio"]!=""){ echo $_GET["fecha_inicio"]; } ?>" class="form-control">
		</div>
    </div>
    <div class="col-lg-3">
		<div class="input-group">
		  <span class="input-group-addon">FECHA_FIN</span>
		  <input type="date" name="fecha_fin" required value="<?php if(isset($_GET["fecha_fin"]) && $_GET["fecha_fin"]!=""){ echo $_GET["fecha_fin"]; } ?>" class="form-control">
		</div>
    </div>
    <div class="col-lg-6">
    <button class="btn btn-primary btn-block">Buscar Libros Prestados</button>
    </div>

  </div>
</form>
<?php
$prestados = array();
if(isset($_GET["fecha_inicio"]) && $_GET["fecha_inicio"]!="" && isset($_GET["fecha_fin"]) && $_GET["fecha_fin"]!=""){
if($_GET["fecha_inicio"]<$_GET["fecha_fin"]){
$prestados = DatosPrestamo::getAllByClientIdAndRange($universitario->id,$_GET["fecha_inicio"],$_GET["fecha_fin"]);
}
}else{
$prestados = DatosPrestamo	::getAllByClientId($universitario->id);

}
if(count($prestados)>0){
?>
<br>
<table class="table table-bordered table-hover	">
	<thead>
		<th>Ejemplar</th>
		<th>Libro</th>
		<th>Universitario</th>
		<th>Fecha Inicio</th>
		<th>Fecha Fin</th>
		<th>Fecha Retorno</th>
	</thead>
	<?php foreach($prestados as $prestado):
	$ejemplar = $prestado->getItem();
	$libro = $ejemplar->getBook();
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
		<td><?php echo $prestado->fecha_inicio; ?></td>
		<td><?php echo $prestado->fecha_fin; ?></td>
		<td><?php echo $prestado->fecha_retorno; ?></td>
	</tr>
<?php endforeach; ?>
</table>

<div class="clearfix"></div>

	<?php
}else{
	?>
	<p class="alert alert-danger">No hay historial de libros prestados.</p>
	<?php
}

?>
<br><br><br><br><br><br><br><br><br><br>
	</div>
</div>