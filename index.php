<?php 
	  	//informações tiradas do site: https://www.devmedia.com.br/criando-sessao-para-login-no-php/27347 
		/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
		 simplesmente não fazer o login e digitar na barra de endereço do seu navegador 
		o caminho para a página principal do site (sistema), burlando assim a obrigação de 
		fazer um login, com isso se ele não estiver feito o login não será criado a session, 
		então ao verificar que a session não existe a página redireciona o mesmo
		 para a index.php.*/
		include('verifica_session.php');
		
	?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <br>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">

    <title>Painel de acesso</title>
  </head>
  <body>
  	<div class="container">
	  	<div class="jumbotron">
	  		<!-- Alerta do Painel-->
	  		<div class="row">
	  			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	  				<div class="alert alert-primary"><h3 align="center">ESCOLHA UMA OPÇÃO</h2></div>
  					<hr class="my-4"> <!-- uma suave linha delimitando partes do form-->
	  			</div>
	  		</div>
	  		<!-- -->
	  		<div class="row">
	  			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title"><strong>Cadastro de usuário</strong></h5>
						</div>
						<div class="card-body">
							<p class="card-text">Cadastro de usuários para acesso ao sistema.</p>
							<div><a class="btn btn-primary" href="cadastrar_usuario.php">Entrar</a></div>
						</div>
					</div>
	    		</div>
	    		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title"><strong>Cadastrar pessoa</strong></h5>
						</div>
						<div class="card-body">
							<p class="card-text">Cadastro de pessoas no banco de dados.</p>
							<div><a class="btn btn-primary" href="cadastrar_pessoa.php">Entrar</a></div>      
						</div>
					</div>
	    		</div>
	  		</div>
	  		<!-- -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title"><strong>Listar Pessoas cadastradas</strong></h5>
						</div>
						<div class="card-body">
							<p class="card-text">Mostrar pessoas cadastradas no banco de dados.</p>
							<div><a class="btn btn-primary" href="listar_cadastros.php">Entrar</a></div>
						</div>
					</div>
    			</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title"><strong>Listar usuários</strong></h5>
						</div>
						<div class="card-body">
							<p class="card-text">Editar cadastro de pessoas no banco de dados.</p>
							<div><a class="btn btn-primary" href="listar_usuario.php">Entrar</a></div>
						</div>
					</div>
    			</div>
			</div>
			<!-- -->
			<div class="row">
				<div class="col-4">Logado como: <?php echo $_SESSION['login'] ?></div>
				<div class="col-4"></div>
				<div class="col-4" align="right"><a href="logout.php">Sair do sistema</a></div>
			</div>
		
    	</div>	
    </div>



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>