<?php
    session_start();   
    include_once("Connection.php");    

    if((isset($_POST['usuario'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($db, $_POST['usuario']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $senha = mysqli_real_escape_string($db, $_POST['senha']);
        $senha = md5($senha);
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_usuario = "SELECT * FROM usuario WHERE usuario = '$usuario' && senha = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($db, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
            $_SESSION['usuario'] = $resultado['usuario'];
            $_SESSION['senha'] = $resultado['senha'];
            header("Location: MainInformationPage.php");
        }
		else{    
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: index.php");
        }
    }
	else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: index.php");
    }
?>