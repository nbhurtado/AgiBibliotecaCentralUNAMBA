<?php

if(Session::getUID()!=""){
		print "<script>window.location='index.php?view=calendario';</script>";
}

?>
<br><br><br><br>
<div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    	<?php if(isset($_COOKIE['contrasenha_actualizada'])):?>
    		<div class="alert alert-success">
    		<p><i class='glyphicon glyphicon-off'></i> Se ha cambiado la contraseña exitosamente !!</p>
    		<p>Pruebe iniciar sesion con su nueva contraseña.</p>

    		</div>
    	<?php setcookie("contrasenha_actualizada","",time()-18600);
    	 endif; ?>

		 
    		<div class="panel panel-primary">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Acceder</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" action="index.php?view=procesoLogin">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Usuario" name="usuario" type="text">	
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Contraseña" name="contrasenha" type="password" value="">
			    		</div>
			    		<input class="btn btn-lg btn-primary btn-block" type="submit" value="Iniciar Sesion">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
<br><br><br><br><br>