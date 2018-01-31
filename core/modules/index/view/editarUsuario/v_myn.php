<?php $usuario = DatosUsuario::getById($_GET["id"]);?>
<div class="row">
  <div class="col-md-12">
	<h1>Editar Usuario</h1>
	<br>
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=actualizarUsuario" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre" value="<?php echo $usuario->nombre;?>" required class="form-control" id="nombre" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellidos" value="<?php echo $usuario->apellidos;?>"  class="form-control" id="apellidos" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre de usuario*</label>
    <div class="col-md-6">
      <input type="text" name="usuario" value="<?php echo $usuario->usuario;?>" class="form-control" required id="usuario" placeholder="Nombre de usuario">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email" value="<?php echo $usuario->email;?>" class="form-control" id="email" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Contrase&ntilde;a</label>
    <div class="col-md-6">
      <input type="password" name="contrasenha" class="form-control" id="inputEmail1" placeholder="Contrase&ntilde;a">
<p class="help-block">La contrase&ntilde;a solo se modificara si escribes algo, en caso contrario no se modifica.</p>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label" >Esta activo</label>
    <div class="col-md-6">
<div class="checkbox">
    <label>
      <input type="checkbox" name="esta_activo" <?php if($usuario->esta_activo){ echo "checked";}?>> 
    </label>
  </div>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label" >Es administrador</label>
    <div class="col-md-6">
  <div class="checkbox">
      <label>
        <input type="checkbox" name="es_admin" <?php if($usuario->es_admin){ echo "checked";}?>> 
      </label>
    </div>
      </div>
    </div>

    <p class="alert alert-info">* Campos obligatorios</p>

    <div class="form-group">
      <div class="col-lg-offset-2 col-lg-10">
      <input type="hidden" name="id_usuario" value="<?php echo $usuario->id;?>">
        <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
      </div>
    </div>
  </form>
    </div>
</div>