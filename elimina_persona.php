<?php 

	require 'conexion.php';
	$conexion = conectarDB();

	$id = $_REQUEST['idp'];

	$query = "DELETE FROM persona WHERE id_persona = '$id' ";
	$resultado = pg_query($conexion,$query);

	if($resultado){	?>
	<script>
		alert('eliminacion correcta');
		location.href='index.php';
	</script>
	<?php }else{ ?>
	<script>
		alert('no se pudo hacer la eliminacion');
		location.href='index.php';
	</script>
	<?php }

?>