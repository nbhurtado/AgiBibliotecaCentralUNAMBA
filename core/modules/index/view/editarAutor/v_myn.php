<?php $autor = DatosAutor::getById($_GET["id"]);?> 
<div class="row">
	<div class="col-md-12">
	<h1>Editar Autor</h1>
	<br>
	<form class="form-horizontal" method="post" id="addproduct" action="index.php?action=editarAutor" role="form">
    <div class="form-group">
      <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
      <div class="col-md-6">
        <input type="text" name="nombre" value="<?php echo $autor->nombre;?>" class="form-control" id="nombre" placeholder="Nombre">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail1" class="col-lg-2 control-label">Apellido*</label>
      <div class="col-md-6">
        <input type="text" name="apellidos" value="<?php echo $autor->apellidos;?>" class="form-control" id="apellidos" placeholder="Apellido">
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-offset-2 col-lg-10">
      <input type="hidden" name="id_usuario" value="<?php echo $autor->id;?>">
        <button type="submit" class="btn btn-success">Actualizar Autor</button>
      </div>
    </div>
  </form> 
	</div>
</div>