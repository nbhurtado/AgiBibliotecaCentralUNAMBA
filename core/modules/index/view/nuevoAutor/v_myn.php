<div class="row"> 
	<div class="col-md-12">
	<h1>Nuevo Autor</h1>
	<br>
	<form class="form-horizontal" method="post" id="addcategory" action="index.php?action=agregarAutor" role="form">
    <div class="form-group">
      <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
      <div class="col-md-6">
        <input type="text" name="nombre" required class="form-control" id="nombre" placeholder="Nombre">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail1" class="col-lg-2 control-label">Apellido*</label>
      <div class="col-md-6">
        <input type="text" name="apellidos" required class="form-control" id="apellidos" placeholder="Apellido">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-offset-2 col-lg-10">
        <button type="submit" class="btn btn-primary">Agregar Autor</button>
      </div>
    </div>
  </form>
	</div>
</div>