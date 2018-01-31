<div class="row"> 
	<div class="col-md-12">
<div class="btn-group pull-right">
	<a href="index.php?view=nuevoAutor" class="btn btn-default"><i class='fa fa-th-list'></i> Nuevo Autor</a>
</div>
		<h1>Autores</h1>
<br>
		<?php

		$autores = DatosAutor::getAll();
		if(count($autores)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre</th>
			<th></th>
			</thead>
			<?php
			foreach($autores as $autor){
				?>
				<tr>
				<td><?php echo $autor->nombre." ".$autor->apellidos; ?></td>
				<td style="width:130px;"><a href="index.php?view=editarAutor&id=<?php echo $autor->id;?>" class="btn btn-warning btn-xs">Editar</a> <a href="index.php?action=borrarAutor&id=<?php echo $autor->id;?>" class="btn btn-danger btn-xs">Eliminar</a></td>
				</tr>
				<?php

			}
?>
</table>
<?php
		}else{
			echo "<p class='alert alert-danger'>No hay Autores</p>";
		}


		?>


	</div>
</div>