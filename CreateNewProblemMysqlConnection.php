<!--  
	Desenvolvido por https://github.com/AlexandroLuis
	Versão 1.0 - 2020
-->
<?php
		ini_set('display_errors', 0 );
		error_reporting(0);
?>
<html>
	<head>	
		<meta charset="utf-8">
		<title>Cadastro de Exercicios</title>
		<meta http-equiv="refresh" content="2; url=CreateNewProblem.php">
		<script type="text/javascript"></script>
		<link rel="shortcut icon" href="Images/favicon.ico" />
	</head>
<body>
	<?php
		$id=$_POST ['id'];
		$name=$_POST ['name'];
		$class=$_POST ['class'];
		$description=$_POST ['description'];
		$type=$_POST ['type'];
		$level2pc=$_POST ['level2pc'];
		$level=$_POST ['level'];
		$Observation=$_POST ['Observation'];
		$source=$_POST ['source'];
		$uploader=$_POST ['uploader'];
		
		$source = preg_replace("\n", "\\n", '$source');
		echo $source;
		Require ('Connection.php');
		$sqlinsert ="insert into exercicio values ('$id','$name','$class','$description','$type','$level2pc','$level','0','$Observation','$source','$uploader')";
		
		mysqli_query($db, $sqlinsert) or die ('ERRO!');
		
		echo"Valor de Código a ser guardado: ";
		echo nl2br($_POST['source']);
		echo "<script> alert ('cadastro realizado com sucesso :)')</script>"; 
	?>
</body>
</html>