<br><br><br><br><div class="row">
	<div class="col-md-3">

	</div>
	<div class="col-md-6">
	<h2>Cambiar Contraseña</h2>
<br>	<form class="form-horizontal" id="cambiarContrasena" method="post" action="index.php?view=cambiarContrasena" role="form">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-4 control-label">Contraseña Actual</label>
    <div class="col-lg-8">
      <input type="password" class="form-control" id="contrasenha" name="contrasenha" placeholder="Contraseña Actual">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword1" class="col-lg-4 control-label">Nueva Contraseña</label>
    <div class="col-lg-8">
      <input type="password" class="form-control"  id="nuevacontrasenha" name="nuevacontrasenha" placeholder="Nueva Contraseña">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword1" class="col-lg-4 control-label">Confirmar Nueva Contraseña</label>
    <div class="col-lg-8">
      <input type="password" class="form-control" id="confirmarnuevacontrasenha" name="confirmarnuevacontrasenha" placeholder="Confirmar Nueva Contraseña">
    </div>
  </div>



  <div class="form-group">
    <div class="col-lg-offset-4 col-lg-8">
      <button type="submit" class="btn btn-success ">Cambiar Contraseña</button>
    </div>
  </div>
</form>

<script>
$("#cambiarContrasena").submit(function(e){
	if($("#contrasenha").val()=="" || $("#contrasenha").val()=="" || $("#confirmarnuevacontrasenha").val()==""){
		e.preventDefault();
		alert("No debes dejar espacios vacios.");

	}else{
		if($("#nuevacontrasenha").val() == $("#confirmarnuevacontrasenha").val()){
//			alert("Correcto");			
		}else{
			e.preventDefault();
			alert("Las nueva contraseña no coincide con la confirmación.");
		}
	}
});

</script>
	</div>
</div>
<br><br><br><br><br><br><br><br><br>