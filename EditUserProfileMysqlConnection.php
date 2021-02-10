<!--  
	Desenvolvido por https://github.com/AlexandroLuis
	Versão 1.0 - 2021
-->
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
		$nome=$_GET['nome'];
		$email=$_GET['email'];
		$senha=$_GET['senha'];
		$situacoe_id=$_GET['situacoe_id'];
		$niveis_acesso_id=$_GET['niveis_acesso_id'];

		require('Connection.php');
		
		$alterar ="update usuario set id='$id', nome='$nome', email='$email', senha='$senha', situacoe_id='$situacoe_id', niveis_acesso_id='$niveis_acesso_id where id='$id' ";
		mysqli_query($db,$alterar) or die ('Não foi possível alterar');
	?>
	<h1>Alterado Com Sucesso!</h1>
</body>
</html>