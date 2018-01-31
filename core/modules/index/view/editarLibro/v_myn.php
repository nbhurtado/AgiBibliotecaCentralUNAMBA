<?php
$libro = DatosLibro::getById($_GET["id"]);
$categoria = DatosCategoria::getAll();
$autor = DatosAutor::getAll();
$editorial = DatosEditorial::getAll();

?>

<div class="row">
<div class="col-md-12">
<h1><?php echo $libro->titulo; ?> <small>Editar libro</small></h1>
<form class="form-horizontal" role="form" method="post" action="./?action=editarLibro" id="addbook">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">ISBN</label>
    <div class="col-lg-10">
      <input type="text" name="isbn" class="form-control" value="<?php echo $libro->isbn; ?>" id="inputEmail1" placeholder="ISBN">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Titulo</label>
    <div class="col-lg-10">
      <input type="text" name="titulo" required class="form-control" value="<?php echo $libro->titulo; ?>" id="inputEmail1" placeholder="Titulo">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Subtitulo</label>
    <div class="col-lg-10">
      <input type="text" name="subtitulo" class="form-control" value="<?php echo $libro->subtitulo; ?>" id="inputEmail1" placeholder="Subtitulo">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descripcion</label>
    <div class="col-lg-10">
    <textarea class="form-control" name="descripcion" placeholder="Descripcion"><?php echo $libro->descripcion; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Num. Paginas</label>
    <div class="col-lg-4">
      <input type="text" name="num_pag" class="form-control" id="inputEmail1" value="<?php echo $libro->num_pag; ?>" placeholder="Num. Paginas">
    </div>
    <label for="inputEmail1" class="col-lg-2 control-label">A&ntilde;o</label>
    <div class="col-lg-4">
      <input type="text" name="anho" class="form-control" id="inputEmail1" value="<?php echo $libro->anho; ?>" placeholder="A&ntilde;o">
    </div>

  </div>



  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Categoria</label>
    <div class="col-lg-10">
<select name="id_categoria" class="form-control">
<option value="">-- SELECCIONE --</option>
  <?php foreach($categoria as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if($libro->id_categoria!=null && $libro->id_categoria==$p->id){ echo "selected"; }?>><?php echo $p->nombre; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Editorial</label>
    <div class="col-lg-10">
<select name="id_editorial" class="form-control">
<option value="">-- SELECCIONE --</option>
  <?php foreach($editorial as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if($libro->id_editorial!=null && $libro->id_editorial==$p->id){ echo "selected"; }?>><?php echo $p->nombre; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Autor</label>
    <div class="col-lg-10">
<select name="id_autor" class="form-control">
<option value="">-- SELECCIONE --</option>
  <?php foreach($authors as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if($libro->id_autor!=null && $libro->id_autor==$p->id){ echo "selected"; }?>><?php echo $p->name." ".$p->lastname; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id" value="<?php echo $libro->id; ?>">
      <button type="submit" class="btn btn-success">Actualizar Libro</button>
      <button type="reset" class="btn btn-default" id="clear">Limpiar Campos</button>
    </div>
  </div>
</form>

</div>
</div>
