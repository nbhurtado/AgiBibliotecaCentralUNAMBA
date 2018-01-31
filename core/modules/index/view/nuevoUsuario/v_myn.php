<div class="row">
	<div class="col-md-12">
		<h1>Agregar Nuevo Usuario</h1>
		<br>
			<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=actualizarUsuario" role="form">

		<div class="form-group">
			<label for="inputEmail1" class="col-lg-2 control-label">Nombres*</label>
			<div class="col-md-6">
			<input type="text" name="nombre" required class="form-control" id="nombre" placeholder="Nombres">
			</div>
		</div>
		<div class="form-group">
			<label for="inputEmail1" class="col-lg-2 control-label">Apellidos*</label>
			<div class="col-md-6">
			<input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Apellidos">
			</div>
		</div>
		<div class="form-group">
			<label for="inputEmail1" class="col-lg-2 control-label">Nombre de usuario*</label>
			<div class="col-md-6">
			<input type="text" name="usuario" class="form-control" required id="usuario" placeholder="Nombre de usuario">
			</div>
		</div>
		<div class="form-group">
			<label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
			<div class="col-md-6">
			<input type="text" name="email" class="form-control" id="email" placeholder="Email">
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail1" class="col-lg-2 control-label">Contrase&ntilde;a*</label>
			<div class="col-md-6">
			<input type="password" name="contrasenha" required class="form-control" id="inputEmail1" placeholder="Contrase&ntilde;a">
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail1" class="col-lg-2 control-label">Es administrador</label>
			<div class="col-md-6">
		<div class="checkbox">
			<label>
			<input type="checkbox" name="es_admin"> 
			</label>
		</div>
			</div>
		</div>

		<p class="alert alert-info">* Campos obligatorios</p>

		<div class="form-group">
			<div class="col-lg-offset-2 col-lg-10">
			<button type="submit" class="btn btn-primary">Agregar Usuario</button>
			</div>
		</div>
		</form>
	</div>
</div>