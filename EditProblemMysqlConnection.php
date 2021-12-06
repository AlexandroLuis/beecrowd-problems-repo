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
		$class=$_POST['class'];
		$type=$_POST['type'];
		$status=$_POST['status'];
		$id=$_POST['id'];
		$name=$_POST['name'];
		$description=$_POST['description'];		
		$level2pc=$_POST['level2pc'];
		$level=$_POST['level'];		
		$Observation=$_POST['Observation'];	
		$source=$_POST['source'];
		$uploader=$_POST['uploader'];
		
		require('Connection.php');
		$alterar ="update exercicio set id='$id', name='$name', class='$class', description='$description', type='$type', level2pc='$level2pc', level='$level', status='$status', Observation='$Observation', source='$source', uploader='$uploader' where id='$id' ";
		mysqli_query($db,$alterar) or die ('Não foi possível alterar');
	?>
	<h1 align="center"> Editando... :) </h1>
</body>
</html>