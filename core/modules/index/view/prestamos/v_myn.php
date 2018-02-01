<div class="row">
	<div class="col-md-12">
		<h1><i class='fa fa-th-large'></i> Prestamos</h1>
<br>
<form class="form-horizontal" role="form">
<input type="hidden" name="view" value="prestamos">
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
$arreglo = array();
if(isset($_GET["fecha_inicio"]) && $_GET["fecha_inicio"]!="" && isset($_GET["fecha_fin"]) && $_GET["fecha_fin"]!=""){
if($_GET["fecha_inicio"]<$_GET["fecha_fin"]){
$arreglo = DatosPrestamo::getRentsByRange($_GET["fecha_inicio"],$_GET["fecha_fin"]);
}
}else{
$arreglo = DatosPrestamo::getRents();

}
if(count($arreglo)>0){
?>
<br>
<table class="table table-bordered table-hover	">
	<thead>
		<th>Ejemplar</th>
		<th>Libro</th>
		<th>Cliente</th>
		<th>Inicio</th>
		<th>Fin</th>
		<th></th>
		<th></th>
	</thead>
	<?php foreach($arreglo as $arreg):
$item = $arreg->getItem();
$book = $item->getBook();
$client = $arreg->getClient();
	?>
	<tr>
		<td style="width:30px;">
		<?php echo $item->code; ?>
		</td>
		<td>
		<?php echo $book->title; ?>
		</td>
		<td>
		<?php echo $client->name." ".$client->lastname; ?>
		</td>
		<td><?php echo $arreg->fecha_inicio; ?></td>
		<td><?php echo $arreg->fecha_fin; ?></td>
		<td style="width:60px;">
		<?php if($arreg->returned_at==""):?>
		<a href="index.php?action=finalizarPrestamo&id=<?php echo $arreg->id; ?>" class="btn btn-xs btn-success">Finalizar</a>
	<?php endif;?>
		</td>
		<td style="width:30px;"><a href="index.php?action=borrarPrestamo&id=<?php echo $arreg->id; ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a></td>
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