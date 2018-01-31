<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AgiBibliotecaCentral</title>

    <!-- Bootstrap core CSS -->
    <link href="res/bootstrap3/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="res/select2/select2.css" rel="stylesheet">
    <link href="res/select2/select2-bootstrap.css" rel="stylesheet">

    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script src="js/jquery-1.10.2.js"></script>
<?php if(isset($_GET["view"]) && $_GET["view"]=="home"):?>
<link href='res/fullcalendar.min.css' rel='stylesheet' />
<link href='res/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='res/js/moment.min.js'></script>
<script src='res/fullcalendar.min.js'></script>
<?php endif; ?>
<script src='res/select2/select2.min.js'></script>

  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">AgiBibliotecaCentralUNAMBA</a>
          <!--<a class="navbar-brand" href="./">AgiBibliotecaCentralUNAMBA <sup><small><span class="label label-primary">INFOTECHS2018</span></small></sup> </a>-->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
<?php 
    $usuario=null;
    if(Session::getUID()!=""):
    $usuario = DatosUsuario::getById(Session::getUID());
?>
         <ul class="nav navbar-nav">
          </ul> 
          <ul class="nav navbar-nav side-nav">
          <li><a href="index.php?view=calendario"><i class="fa fa-home"></i> Calendario</a></li>
          <li><a href="index.php?view=prestamo"><i class="fa fa-cube"></i> Prestamo</a></li>
          <li><a href="index.php?view=prestamos"><i class="fa fa-th-large"></i> Prestamos</a></li>
          <li><a href="index.php?view=libros"><i class="fa fa-book"></i> Libros</a></li>
          <li><a href="index.php?view=universitario"><i class="fa fa-male"></i> Clientes</a></li>
          <li><a href="index.php?view=categoria"><i class="fa fa-th-list"></i> Categorias</a></li>
          <li><a href="index.php?view=editorial"><i class="fa fa-th-list"></i> Editoriales</a></li>
          <li><a href="index.php?view=autor"><i class="fa fa-th-list"></i> Autores</a></li>
          <?php if($usuario->es_admin):?>
          <li><a href="index.php?view=reportes"><i class="fa fa-area-chart"></i> Reportes</a></li>
          <li><a href="index.php?view=usuario"><i class="fa fa-users"></i> Usuarios </a></li>
        <?php endif;?>
          </ul>




<?php endif;?>



<?php if(Session::getUID()!=""):?>
<?php 
$usuario=null;
if(Session::getUID()!=""){
  $usuario = DatosUsuario::getById(Session::getUID());
  $usu = $usuario->nombre." ".$usuario->apellidos;

  }?>
          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <b><u>INFOTECHS</u></b> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a target="_blank" href="http://http://infotecs.pe/">Sitio Web - Developers</a></li>
          <li><a target="_blank" href="https://www.facebook.com/nilbra07">Acerca de <b>Nilton Hurtado</b></a></li>
        </ul>
        </li>

            <li class="dropdown user-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <?php echo $user; ?> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="index.php?view=cambiarContrasenha">Cambiar Contraseña</a></li>
          <li><a href="salir.php">Salir</a></li>
        </ul>
        </li>
        </ul>
<?php else:?>
<?php endif; ?>




        </div><!-- /.navbar-collapse -->
      </nav>


      <div id="page-wrapper">

<?php 
  // puedo cargar otras funciones iniciales
  // dentro de la funcion donde cargo la vista actual
  // como por ejemplo cargar el corte actual
  View::load("login");

?>



      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->

<script src="res/bootstrap3/js/bootstrap.min.js"></script>
<script>
</script>
  </body>
</html>