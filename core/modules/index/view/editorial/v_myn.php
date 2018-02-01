<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
	<a href="index.php?view=nuevoEditorial" class="btn btn-default"><i class='fa fa-th-list'></i> Nueva Editorial</a>
</div>
		<h1>Editoriales</h1>
<br>
		<?php

		$editoriales = DatosEditorial::getAll();
		if(count($editoriales)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre</th>
			<th></th>
			</thead>
			<?php
			foreach($editoriales as $editorial){
				?>
				<tr>
				<td><?php echo $editorial->nombre; ?></td>
				<td style="width:130px;"><a href="index.php?view=editarEditorial&id=<?php echo $editorial->id;?>" class="btn btn-warning btn-xs">Editar</a> <a href="index.php?action=borrarEditorial&id=<?php echo $editorial->id;?>" class="btn btn-danger btn-xs">Eliminar</a></td>
				</tr>
				<?php

			}?>
</table>
			<?php
		}else{
			echo "<p class='alert alert-danger'>No hay Editoriales</p>";
		}


		?>


	</div>
</div>