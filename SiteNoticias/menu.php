
<html>
 <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <style>
    #div1
	{
		border: 1px solid #ccc;
		margin-top: 6%;
		border-radius:10px;
	}
	#logo
	{
		margin: 0 auto;
		width: 200px;
	}
   
   </style>
 </head>
 <body>
 <div id="logo">
 <img src="logo.png">
 </div>
 <div class="container">
 
   <form action="logar.php" method="post">
   <div class='col-md-4 col-md-offset-4' id="div1">
     
  <h2>Acesso Administrativo</h2>
  <form role="form">
    <div class="form-group">
      <label for="email">Usuario:</label>
      <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Enter usuario">
    </div>
    <div class="form-group">
      <label for="pwd">Senha:</label>
      <input type="password" class="form-control" id="pwd" name="senha" placeholder="Enter senha">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Entrar</button>
	<br>
	
  </form>
<br>
  </div>
   
   </div>
   </form>
   
   <?php
    
   
   ?>
 </body>
</html>