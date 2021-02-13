<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	
		<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-1">
						<span class="sr-only">Desplegar / Ocultar Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">LogoTipo</a>
				</div>
				<!-- aqui inicia el menu -->
				<div class="collapse navbar-collapse" id="navegacion-1">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Inicio</a></li>
						<li class="active"><a href="#">Registro</a></li>
					</ul>
				</div>
			</div>
		</nav>		
	</header>

	<!-- CUERPO DE LA PAGINA -->
	<section class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h2 class="post-title">
					Registro Personas
				</h2>
				<form action="registra_persona.php" name="form1" class="form-horizontal" method="post">
					<div class="form-group">
						<label for="nombre" class="control-label col-md-2">
							Nombre Completo:
						</label>
						<div class="col-md-10">
							<input type="text" name="nombre" class="form-control" placeholder="digite nombre">
						</div>
					</div>
					<div class="form-group">
						<label for="colegio" class="control-label col-md-2">
							Recinto de Votacion :
						</label>
						<div class="col-md-10">
							<input type="text" name="colegio" class="form-control" placeholder="digite colegio">
						</div>
					</div>
					<div class="form-group">
						<label for="mesa" class="control-label col-md-2">
							Mesa :
						</label>
						<div class="col-md-10">
							<input type="text" name="mesa" class="form-control" placeholder="digite mesa">
						</div>
					</div>
					<!--			MACRODISTRITO				-->	
					<div class="form-group">
						<label for="macrodistrito" class="control-label col-md-2">
							Elige un Macrodistrito:
						</label>						
						<div class="col-md-10">
							<input type="text" name="macrodistrito" class="form-control" placeholder="digite macrodistrito">
						</div>
					</div>
					<!--			ZONA				-->	
					<div class="form-group">
						<label for="zona" class="control-label col-md-2">
							Elige una Zona:
						</label>						
						<div class="col-md-10">
							<input type="text" name="zona" class="form-control" placeholder="digite zona">
						</div>
					</div>
					<div class="form-group">
						<label for="direccion" class="control-label col-md-2">
							Direccion :
						</label>
						<div class="col-md-10">
							<input type="text" name="direccion" class="form-control" placeholder="digite direccion">
						</div>
					</div>
					<div class="form-group">
						<label for="celular" class="control-label col-md-2">
							Celular :
						</label>
						<div class="col-md-10">
							<input type="text" name="celular" class="form-control" placeholder="digite celular">
						</div>
					</div>				
					<div class="form-group">
						<div class="col-md-10 col-md-offset-2">
							<button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
						</div>						
					</div>
				</form>
			</div>
		</div>	
	</section>


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>