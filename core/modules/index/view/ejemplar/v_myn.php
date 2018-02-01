<?php
$libro = DatosLibro::getById($_GET["id"]);
?>
<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
	<a href="index.php?view=nuevoEjemplar&id_libro=<?php echo $libro->id; ?>" class="btn btn-default"><i class='fa fa-th-list'></i> Nuevo Ejemplar</a>
</div>
		<h1><?php echo $libro->titulo;?> <small>Ejemplares</small></h1>
<br>
		<?php

		$ejemplares = DatosEjemplar::getAllByBookId($libro->id);
		if(count($ejemplares)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Codigo</th>
			<th>Estado</th>
			<th></th>
			</thead>
			<?php
			foreach($ejemplares as $ejemplar){
				?>
				<tr>
				<td><?php echo $ejemplar->codigo; ?></td>
				<td><?php echo $ejemplar->getEstado()->nombre; ?></td>
				<td style="width:200px;">
					<a href="index.php?view=historialEjemplar&id=<?php echo $ejemplar->id;?>" class="btn btn-default btn-xs">Historial</a>
					<a href="index.php?view=editarEjemplar&id=<?php echo $ejemplar->id;?>" class="btn btn-warning btn-xs">Editar</a> <a href="index.php?action=borrarEjemplar&id=<?php echo $ejemplar->id;?>" class="btn btn-danger btn-xs">Eliminar</a></td>
				</tr>
				<?php

			}
			?>
			</table>
			<?php
		}else{
			echo "<p class='alert alert-danger'>No hay Ejemlpares</p>";
		}


		?>


	</div>
</div>
