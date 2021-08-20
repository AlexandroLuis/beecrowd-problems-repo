<!--  
	Desenvolvido por https://github.com/AlexandroLuis
	Versão 1.0 - 2020
-->
<html>
<head>
	<meta charset="utf-8">
	<title>Editando...</title>
	<meta http-equiv="refresh" content="2; url=MainInformationPage.php">
	<script type="text/javascript"></script>
	<link rel="shortcut icon" href="Images/favicon.ico" />
</head>
<body>
	<?php 
		$class=$_GET['class'];
		$type=$_GET['type'];
		$status=$_GET['status'];
		$id=$_GET['id'];
		$name=$_GET['name'];
		$description=$_GET['description'];		
		$level2pc=$_GET['level2pc'];
		$level=$_GET['level'];		
		$Observation=$_GET['Observation'];	
		$source=$_GET['source'];
		$uploader=$_GET ['uploader'];
		
		require('Connection.php');
		//$alterar ="update usuarios set id='$id', name='$name', description='$description', level2pc='$level2pc', level='$level', Observation='$Observation' where id='$id' ";
		$alterar ="update exercicio set id='$id', name='$name', class='$class', description='$description', type='$type', level2pc='$level2pc', level='$level', status='$status', Observation='$Observation', source='$source', uploader='$uploader' where id='$id' ";
		mysqli_query($db,$alterar) or die ('Não foi possível alterar');
	?>
	<h1>Alterado Com Sucesso!</h1>
</body>
</html>