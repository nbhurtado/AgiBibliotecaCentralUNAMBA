<?php $universitario = DatosUniversitario::getById($_GET["id"]);?>
<div class="row">
	<div class="col-md-12">
	<h1>Editar Universitario</h1>
	<br>
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?action=editarUniversitario" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre" value="<?php echo $universitario->nombre;?>" class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellidos*</label>
    <div class="col-md-6">
      <input type="text" name="apellidos" value="<?php echo $universitario->apellidos;?>" required class="form-control" id="lastname" placeholder="Apellido">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion*</label>
    <div class="col-md-6">
      <input type="text" name="direccion" value="<?php echo $universitario->direccion;?>" class="form-control" required id="username" placeholder="Direccion">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email" value="<?php echo $universitario->email;?>" class="form-control" id="email" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono</label>
    <div class="col-md-6">
      <input type="text" name="telefono"  value="<?php echo $universitario->telefono;?>"  class="form-control" id="inputEmail1" placeholder="Telefono">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"></label>
    <div class="col-md-6">
  <p class="text-info">* Campos obligatorios</p>
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id" value="<?php echo $universitario->id;?>">
      <button type="submit" class="btn btn-success">Actualizar Universitario</button>
    </div>
  </div>
</form>
	</div>
</div>