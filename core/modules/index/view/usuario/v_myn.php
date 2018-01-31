<div class="row">
	<div class="col-md-12">
	<a href="index.php?view=nuevoUsuario" class="btn btn-default pull-right"><i class='glyphicon glyphicon-user'></i> Nuevo Usuario</a>
		<h1>Lista de Usuarios</h1>
<br>
		<?php

		$usuarios = DatosUsuario::getAll();
		if(count($usuarios)>0){
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre completo</th>
			<th>Nombre de usuario</th>
			<th>Activo</th>
			<th>Admin</th>
			<th></th>
			</thead>
			<?php
			foreach($usuarios as $usuario){
				?>
				<tr>
				<td><?php echo $usuario->nombre." ".$usuario->apellidos; ?></td>
				<td><?php echo $usuario->usuario; ?></td>
				<td>
					<?php if($usuario->esta_activo):?>
						<i class="glyphicon glyphicon-ok"></i>
					<?php endif; ?>
				</td>
				<td>
					<?php if($usuario->es_admin):?>
						<i class="glyphicon glyphicon-ok"></i>
					<?php endif; ?>
				</td>
				<td style="width:30px;"><a href="index.php?view=editarUsuario&id=<?php echo $usuario->id;?>" class="btn btn-warning btn-xs">Editar</a></td>
				</tr>
				<?php

			}



		}else{
			// no hay usuarios
		}

		?>

	</div>
</div>