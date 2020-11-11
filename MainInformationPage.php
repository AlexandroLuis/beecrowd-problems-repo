<!--  
	Desenvolvido por https://github.com/AlexandroLuis
	Versão 1.0 - 2020
	
	PUXAR DADOS DO LOGIN PARA ESTÁ PÁGINA, FAZER FUNÇÃO PARA DESLOGAR
-->
<?php
	ini_set('display_errors', 0 );
	error_reporting(0);
?>
<html>
	<head>
		<title>Uriexamples</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="Style/style.css">
		<link rel="shortcut icon" href="Images/favicon.ico" />
		<script src="https://apis.google.com/js/platform.js" async defer></script> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<meta name="google-signin-client_id" content="384602407862-g2t95qbtuto07r923qlic2317dbrkboa.apps.googleusercontent.com">
	</head>
<body>
	<ul><!-- Menu Inicial -->
		<li style="float:left"><a href="UserProfile.php">
			<script>
				if(auth2.isSignedIn.get()){
					var profile = auth2.currentUser.get().getBasicProfile();
					console.log('Bem Vindo, ' + profile.getName()'!');
				}
			</script>
		</a></li>
		<li style="float:right"><a id="logout" title="Click to Logout" href="?exit" onclick="revokeAllScopes();">Sair</a></li>
		<li style="float:right"><a href="CreateNewProblem.php">Inserir Novo</a></li>	
	</ul><!-- Fim Menu Inicial -->
	<script><!--Logout->
		function signOut() {
			var auth2 = gapi.auth2.getAuthInstance();
			auth2.signOut().then(function () {
			  console.log('Logout Com Sucesso!');
			  window.location.href ="index.php";
			});
		  }
	</script>
	
	<div class="tab-container"><!-- Lista De Problemas -->
        <h2 align ="left">Seleção de Problemas do URI Online Judge!</h2><br>
        <table border="0" style="text-align:left;">
            <tr>
				<th width="10"></th>
                <th width="75">ID</th>
                <th width="270">Nome</th>				
				<th width="200">
					<a onclick="classificacao()" class="dropbtn">Categoria</a>
						<div id="classificacao" class="dropdown-content">
							<a href="?Order=class">Ordenar por Categoria</a>
						</div>
				</th>
				<th width="75">
					<a onclick="dificuldade()" class="dropbtn">Nivel</a>
						<div id="dificuldade" class="dropdown-content">
							<a href="?Order=level&Value=asc">Crescente</a>
							<a href="?Order=level&Value=desc">Decrescente</a>
						</div>
				</th>
				<th width="220">
					<a onclick="tipo()" class="dropbtn">Classificação</a>
						<div id="tipo" class="dropdown-content">
							<a href="?Order=type">Ordenar Por tipo</a>
						</div>
				</th>			 					
				<th width="140" >
					<a onclick="dificuldadee2pc()" class="dropbtn">Dificuldade</a>
						<div id="dificuldadee2pc" class="dropdown-content">
							<a href="?Order=level2pc&Value=asc">Crescente</a>
							<a href="?Order=level2pc&Value=desc">Decrescente</a>
						</div>
				</th>
				<th width="200">Mais Informações</th>
				<th width="150">Editar Informações</th>
            </tr><!-- Fim Lista de Problemas -->
			
			<script><!-- Função para fazer o  dropdown -->
				function classificacao() {
				  document.getElementById("classificacao").classList.toggle("show");
				}	
				function tipo() { 
				  document.getElementById("tipo").classList.toggle("show");
				}				
				function dificuldadee2pc() {
				  document.getElementById("dificuldadee2pc").classList.toggle("show");
				}							
				function dificuldade() {
				  document.getElementById("dificuldade").classList.toggle("show");
				}
				function status() {
				  document.getElementById("status").classList.toggle("show");
				}
				
				window.onclick = function(event) {
				  if (!event.target.matches('.dropbtn')) {
					var dropdowns = document.getElementsByClassName("dropdown-content");
					var i;
					for (i = 0; i < dropdowns.length; i++) {
					  var openDropdown = dropdowns[i];
					  if (openDropdown.classList.contains('show')) {
						openDropdown.classList.remove('show');
					  }
					}
				  }
				}
			</script><!-- Fim da Função dropdown -->
			<?php
				require('Connection.php');
					
				//Formas de Ordenação
				$Order = $_GET['Order'];
				$Value = $_GET['Value'];
				if($Order)
					$result = mysqli_query($db, "SELECT * FROM exercicio ORDER BY $Order $Value");
				else
					$result = mysqli_query($db, "SELECT * FROM exercicio");
				
				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr>
							<td></td>
							<td>" .$row['id'] ."</td>
							<td>" ."<a href=https://www.urionlinejudge.com.br/judge/pt/problems/view/".$row['id'] .">".$row['name'] ."</a></td>
							<td>" .$row['class'] ."</td>
							<td>" .$row['level'] ."</td>
							<td>" .$row['type'] ."</td>
							<td>" .$row['level2pc'] ."</td>
							<td>" ."<a href=ShowProblemsInfo.php?id=".$row['id'] .">Mostrar Informações</a></td>
							<td>" ."<a href=EditProblemInfo.php?id=".$row['id'] ."> Editar Problema</a></td>";
				}
				mysqli_free_result($result);
			?>
        </table>
    </div>
</body>
</html>