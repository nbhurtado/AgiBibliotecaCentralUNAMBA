<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
	<a href="index.php?view=nuevoCategoria" class="btn btn-default"><i class='fa fa-th-list'></i> Nueva Categoria</a>
</div>
		<h1>Categorias</h1>
<br>
		<?php

		$categorias = DatosCategoria::getAll();
		if(count($categorias)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre</th>
			<th></th>
			</thead>
			<?php
			foreach($categorias as $categoria){
				?>
				<tr>
				<td><?php echo $categoria->nombre; ?></td>
				<td style="width:130px;"><a href="index.php?view=editarCategoria&id=<?php echo $categoria->id;?>" class="btn btn-warning btn-xs">Editar</a> <a href="index.php?action=borrarCategoria&id=<?php echo $categoria->id;?>" class="btn btn-danger btn-xs">Eliminar</a></td>
				</tr>
				<?php

			}
			?>
			</table>
			<?php
		}else{
			echo "<p class='alert alert-danger'>No hay Categorias</p>";
		}


		?>


	</div>
</div>
