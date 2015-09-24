<?php  
  $usuario= $_POST["usuario"];
  $senha= $_POST["senha"];
  //Configuraçoes da Conexão
  	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "sitenoticia";
	
  //Conexao		
  $conn = new mysqli($servername, $username, $password,$db);
	    $SQL="select * from logar where login='$usuario'";
	    $result = $conn->query($SQL);
	    $dados = $result->fetch_assoc();
    
		
 

 if($senha == $dados["senha"])
	{
		echo "Teste";
	}
	else
	{
		echo "Usuário ou senha incorretos!";
		echo "<br>
				<a href='login.html'>Voltar</a>";
	}
  }
?>
