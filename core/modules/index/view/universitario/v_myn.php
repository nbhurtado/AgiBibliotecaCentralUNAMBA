<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
	<a href="index.php?view=nuevoUniversitario" class="btn btn-default"><i class='fa fa-male'></i> Nuevo Universitario</a>
</div>
		<h1>Universitarios</h1>
<br>
		<?php

		$universitarios = DatosUniversitarios::getAll();
		if(count($universitarios)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre completo</th>
			<th>Direccion</th>
			<th>Email</th>
			<th>Telefono</th>
			<th></th>
			</thead>
			<?php
			foreach($universitarios as $universitario){
				?>
				<tr>
				<td><?php echo $universitario->nombre." ".$universitario->apellidos; ?></td>
				<td><?php echo $universitario->direccion; ?></td>
				<td><?php echo $universitario->email; ?></td>
				<td><?php echo $universitario->telefono; ?></td>
				<td style="width:200px;">
				<a href="index.php?view=historialUniversitario&id=<?php echo $universitario->id;?>" class="btn btn-default btn-xs">Historial</a>
				<a href="index.php?view=editarUniversitario&id=<?php echo $universitario->id;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?action=borrarUniversitario&id=<?php echo $universitario->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
				</td>
				</tr>
				<?php

			}
?>
</table>
<?php


		}else{
			echo "<p class='alert alert-danger'>No hay Universitarios registrados.</p>";
		}


		?>


	</div>
</div>