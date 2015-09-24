<?php
  $conexao = mysql_connect("localhost","root","");
		     mysql_select_db("sitenoticia",$conexao);
			 
  	  	$SQL1="select * from logar order by login";
	    $resultado1= mysql_query($SQL1,$conexao);
		
	    $SQL2="select * from logar order by senha";
	    $resultado2= mysql_query($SQL2,$conexao);
		
  session_start();
  
  $usuario= $_POST["usuario"];
  $senha= $_POST["senha"];
  
  if($usuario == "" && $senha == "")
  {
	  echo "<div>";
	  echo "<p>Insira um usuario e senha</p>";
	  echo "</div>";
  }
  else
  {

		if($resultado1 == $usuario && $resultado2 == $senha)
		{
			header("Location:inicioAdm.php");
		}
		else
		{
		   echo "<div>";
	       echo "<p>Usuario ou senha incorretos</p>";
	       echo "</div>";
		}
  }
?>