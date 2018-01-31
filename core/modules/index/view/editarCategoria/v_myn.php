<?php $categoria = DatosCategoria::getById($_GET["id"]);?>
<div class="row">
	<div class="col-md-12">
	<h1>Editar Categoria</h1>
	<br>
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?action=editarCategoria" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre" value="<?php echo $categoria->nombre;?>" class="form-control" id="nombre" placeholder="Nombre">
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id_usuario" value="<?php echo $categoria->id;?>">
      <button type="submit" class="btn btn-success">Actualizar Categoria</button>
    </div>
  </div>
</form>
	</div>
</div>