<!--  
	Desenvolvido por https://github.com/AlexandroLuis
	Versão 1.0 - 2020
-->
<?PHP 
	$hostname='localhost';	//Nome do Servidor
	$username='root';		//Nome do Usuario do servidor
	$pass='';				//Senha do servidor
	$bd='UriExamples';		//Nome do banco de dados
	
	//Conecta ao banco de dados
	$db=Mysqli_Connect($hostname, $username, $pass);	 
	Mysqli_Select_db($db, $bd);	
?>
