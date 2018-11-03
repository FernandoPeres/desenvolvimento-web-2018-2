<?php 
 //include(cadastrar_salvar.php);

 ?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <br>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">

    <title>10 de Setembro de 2018</title>
  </head>
  <body>
    <div class="container" style="align-items: center">
    	<div class="jumbotron">
    		<div class="row" >
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-1 col-lg-2"></div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-8">
					
					<form method="post" action="validar_login.php" id="formlogin" name="formlogin">
						<div class="alert alert-primary" role="alert" style="text-align: center">
							<h2>LOGIN</h1>
						</div>
						<!-- mensagem de alerta de erro no login, campo vazio, login e/ou senha encontrados -->
						<?php if(!empty($_GET['msg'])) : ?>
							<div class="alert alert-danger">
								<?php echo $_GET['msg'] ?>
							</div>
						<?php endif ?>
												
						<div class="form-group">
						    <label for="exampleInputEmail1"><strong>Usuário</strong></label>
						    <input type="text" name="login" id="login" class="form-control" placeholder="Digite seu login">
						    <small class="form-text text-muted">Nunca compartilhe seu login e senha, com ninguém!</small>
						</div>
						<div class="form-group">
						    <label for="exampleInputPassword1"><strong>Senha</strong></label>
						    <input type="password" name="senha" id="senha" class="form-control"  placeholder="Senha">
						</div>
						<button type="submit" class="btn btn-primary">Entrar</button>
						<a class="btn btn-primary" href="index.php" role="button">Painel</a>
					</form>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-1 col-lg-2"></div>					
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