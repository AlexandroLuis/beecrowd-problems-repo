<html>
<head>
	<meta charset="utf-8">
	<title>Editando...</title>
	<meta http-equiv="refresh" content="1; url=UserProfile.php">
	<script type="text/javascript"></script>
	<link rel="shortcut icon" href="Images/favicon.ico" />
</head>
<body>
	<?php 
		$id=$_GET['id'];
		$usuario=$_GET['usuario'];
		$senha= MD5($_GET['senha']);

		require('Connection.php');
		
		echo $senha;
		
		$alterar ="update usuario set id='$id', usuario='$usuario', senha='$senha' where id='$id' ";
		mysqli_query($db,$alterar) or die ('Não foi possível alterar');
	?>
</body>
</html>