<?php 
// session_start inicia a sessão
session_start();

// conectando com o bando de dados.
include('conexao.php');

// as variáveis login e senha recebem os dados digitados na página anterior

if(empty($_POST['login']) || empty($_POST['senha'])) {
	header('location: login.php?msg=Preencha os campos corretamente!');
	exit;
}

$login = $_POST['login'];
$senha = $_POST['senha'];

//pesquisa na tabela de usuarios

	$sql = "SELECT * FROM user where login_user like '$login' and senha_user like '$senha'";

	$consulta = $conexao->prepare($sql);

	$resultado = $consulta->execute();

	$registros = $consulta->fetchAll(PDO::FETCH_OBJ);

	//$count = $consulta->rowCount();

//echo "O resultado de count registro é: ".count($registros);


/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi 
bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do 
resultado ele redirecionará para a página site.php ou retornara  para a página 
do formulário inicial para que se possa tentar novamente realizar o login */
	if(count($registros) > 0 )
	{
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	header('location:index.php');
	}
	else{
	  unset ($_SESSION['login']);
	  unset ($_SESSION['senha']);
	  //header('location:login.php');
	  header('location: login.php?msg=Usuário e/ou senha incorretos!');
	   
	  }
?>