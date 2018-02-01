
<?php if(isset($_GET["product"]) && $_GET["product"]!=""):?>
<?php
$products = DatosLibro::getLike($_GET["product"]);
if(count($products)>0){
?>
<h3>Resultados de la Busqueda</h3>
<table class="table table-bordered table-hover">
<thead>
	<th>ISBN</th>
	<th>Titulo del Libro</th>
	<th>Elegir ejemplar</th>
</thead>
<?php
$products_in_cero=0;
 foreach($products as $product):
?>
	
<tr>
	<td style="width:80px;"><?php echo $product->isbn; ?></td>
	<td><?php echo $product->titulo; ?></td>
	<td><form method="post" action="index.php?action=agregarPrestamo">
	<input type="hidden" name="id_libro" value="<?php echo $product->id; ?>">
<?php $items = DatosEjemplar::getAvaiableByBookId($product->id);?>
<div class="input-group">
<select class="form-control" name="id_ejemplar" required>
<option value=""> -- EJEMPLAR --</option>
<?php foreach($items as $item):?>
<option value="<?php echo $item->id; ?>"> <?php echo $item->codigo; ?></option>
<?php endforeach; ?>
</select>
  <span class="input-group-btn">
	<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i> Prestar Libro</button>
  </span>
</div>


	</form></td>
</tr>

<?php endforeach;?>
</table>

<?php
}else{
echo "<br><p class='alert alert-danger'>No se encontro el libro.</p>";
}
?>
<hr><br>
<?php else:
?>
<?php endif; ?>