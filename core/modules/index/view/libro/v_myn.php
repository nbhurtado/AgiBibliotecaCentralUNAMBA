<?php 
?>
<div class="row">
	<div class="col-md-12">
          <a href="index.php?view=nuevoLibro" class="btn btn-default pull-right"><i class="fa fa-book"></i> Nuevo Libro</a>

		<h1>Libros Biblioteca Central UNAMBA - 2018</h1>


		<?php
		$libros = DatosLibro::getAll();
		if(count($libros)>0){
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<th>ISBN</th>
			<th>Titulo</th>
			<th>Subtitulo</th>
			<th>Ejemplares</th>
			<th>Disponibles</th>
			<th>Categoria</th>
			<th></th>
			</thead>
			<?php
			foreach($libros as $libro){
				$categoria  = $libro->getCategoria();
				?>
				<tr>
				<td><?php echo $libro->isbn; ?></td>
				<td><?php echo $libro->titulo; ?></td>
				<td><?php echo $libro->subtitulo; ?></td>
				<td><?php echo DatosEjemplar::countByBookId($libro->id)->c; ?></td>
				<td><?php echo DatosEjemplar::countAvaiableByBookId($libro->id)->c; ?></td>
				<td><?php if($categoria!=null){ echo $categoria->nombre; }  ?></td>
				<td style="width:210px;">
				<a href="index.php?view=ejemplar&id=<?php echo $libro->id;?>" class="btn btn-default btn-xs">Ejemplares</a>
				<a href="index.php?view=editarLibro&id=<?php echo $libro->id;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?action=borrarLibro&id=<?php echo $libro->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
				</td>
				</tr>
				<?php

			}


				?>
				</table>
				<?php

		}else{
			echo "<p class='alert alert-danger'>No hay Libros</p>";
		}


		?>


	</div>
</div>