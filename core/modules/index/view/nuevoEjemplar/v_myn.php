<?php $libro = DatosLibro::getById($_GET["book_id"]); ?>
<div class="row">
	<div class="col-md-12">
	<h1><?php echo $libro->titulo; ?> <small>Nuevo Ejemplar</small></h1>
	<br>
	<form class="form-horizontal" method="post" id="addcategory" action="./index.php?action=agregarEjemplar" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Codigo*</label>
    <div class="col-md-6">
      <input type="text" name="codigo" required class="form-control" id="codigo" placeholder="Codigo">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Estado*</label>
    <div class="col-md-6">
<select name="id_estado" class="form-control">
  <?php foreach(DatosEstado::getAll() as $p):?>
    <option value="<?php echo $p->id; ?>"><?php echo $p->nombre; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id_libro" value="<?php echo $libro->id; ?>">
      <button type="submit" class="btn btn-primary">Agregar Ejemplar</button>
    </div>
  </div>
</form>
	</div>
</div>