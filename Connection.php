<!--  
	Desenvolvido por https://github.com/AlexandroLuis
	Versão 1.0 - 2020
-->
<?PHP 
	$hostname='rds-mysql-uriexamples.cqrhkcdlpxn6.sa-east-1.rds.amazonaws.com';	//Nome do Servidor
	$username='masterUsername';		//Nome do Usuario do servidor
	$pass='G37SYckTZhFaxrh';				//Senha do servidor
	$bd='rds-mysql-uriexamples';		//Nome do banco de dados
        $dbport = '3306';
	
	//Conecta ao banco de dados
	$db=Mysqli_Connect($hostname, $username, $pass);	 
	Mysqli_Select_db($db, $bd);	
?>
