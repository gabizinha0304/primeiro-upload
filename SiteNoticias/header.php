<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 
   <style>

	 #pesquisa
	{
		width:280px;
		height:40px;
		float: right;
		margin-top: 60px;
		
	}
	#btn_pesquisa
	{
		width:70px;
		height:40px;
		background-color: #EBEBE0;
		border:1px solid #EBEBE0;
		float: right;
		margin-top: 60px;
		margin-left: 10px;
		margin-right: 10px;
	}
   
   #myCarousel, .container
   {
	   
	   width:98%;
	   margin-left:auto;
	   margin-right:auto;
   }
     .container
	 {
		 
		 border:1px solid #ccc;
		 text-align:justify;
		 border-radius:10px;
		 padding:10px;
		 margin:5px;
		 background:#E6E6E1;
	 }
	 
	  .carousel-inner > .item > img,
	.carousel-inner > .item > a > img 
	{
      width: 70%;
      margin: auto;
  }
  
  span.glyphicon-search {
    font-size: 1.7em;
}
   </style>
 </head>
 <body>
  
  <div>
   <img src="logo.png">
    <button type="button" class="btn btn-default btn-sm" id='btn_pesquisa'>
          <span class="glyphicon glyphicon-search"></span> 
        </button>
   <input type="text" class="form-control input-sm" id='pesquisa' placeholder="Pesquisar">
  
   

  </div>
  
  
 
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">OpçãoNews</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Economia</a></li>
            <li><a href="#">Esporte</a></li>
            <li><a href="#">Mulher</a></li>
			<li><a href="#">Cultura</a></li>
			<li><a href="#">Saúde</a></li>
			<li><a href="#">Entreterimento</a></li>
			<li><a href="#">Internacional</a></li>
			<li><a href="#">Tempo</a></li>
			<li><a href="#">Turismo</a></li>
			<li><a href="#">Jogos</a></li>
          </ul>
        </li>
        <li><a href="#">Destaques</a></li>
        <li><a href="#">Empregos</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="menu.php" name="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">