<?php
function __autoload($class_name){
	require_once 'classes/' . $class_name . '.php';
	

}

?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="primeira">
		<meta name="author" content="Luiz">
		<link rel="icon" href="../../../../favicon.ico">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



		<title>Detalhe Cliente</title>

		<!-- Bootstrap core CSS -->
		<link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="navbar-top.css" rel="stylesheet">
</head>
<body>

<!-- TOPO PAGINA -->
<div>
		
		<nav class="navbar fixed-top navbar navbar-expand-lg navbar-dark bg-dark mb-4">
			<a class="navbar-brand" href="#">Infortech MS</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="listacliente.php"">Lista Clientes</a>
					</li>
					
				</ul>
				<form class="form-inline mt-2 mt-md-0">
					<input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
					<button class="btn btn-primary my-3 my-sm-0" type="submit">Buscar</button>
				</form>
			</div>
		</nav>

</div>

<br>
<br>
<br>
<br>
<!-- FIM TOPO PAGINA -->

<?php

$cliente = new Clientes();

if(isset($_POST['detalhe'])):
	$id = $_POST['id'];
	$nome = $_POST['nome'];	
	$pessoa = $_POST['pessoa'];
	$cpf = $_POST['cpf'];
	$cnpj = $_POST['cnpj'];
	$endereco = $_POST['endereco'];

	$cliente->setNome($nome);
	$cliente->setPessoa($pessoa);
	$cliente->setCpf($cpf);
	$cliente->setCnpj($cnpj);
	$cliente->setEndereco($endereco);

endif;

?>


<?php

if(isset($_GET['acao']) && $_GET['acao'] == 'detalhe'){

	$id = (int)$_GET['id'];
	$resultado = $cliente->find($id);
}
?>


<!-- CORPO DA PAGINA -->

<div class="container">
	<h1 align="left">   Detalhes do Cliente <img style="padding-bottom: 5px;" width="40" src="\LUIZ-MARCELO\PHP POO  CRUD\img\userdetalhe.png"></h1>
	<br>

<form>
	<table class="table table-hover" width="100%" border="5" bordercolor="#EEE" cellspacing="0" cellpadding="10">

		<thhead>
			<tr>
				<td> <strong> ID </strong></td>
				<td> <strong> Nome </strong></td>
				<td> <strong> Pessoa </strong></td>
				<td> <strong> CPF </strong></td>
				<td> <strong> CNPJ </strong></td>
				<td> <strong> Endereço </strong></td>
	
		
			</tr>
		</thhead>



		<tbody>
			<tr>
		  		<td><?php echo $resultado->id; ?> </td>
		  		<td> <?php echo $resultado->nome; ?> </td>
		  		<td><?php echo $resultado->pessoa; ?></td>
		  		<td> <?php echo $resultado->cpf; ?> </td>
		  		<td> <?php echo $resultado->cnpj; ?> </td>
		  		<td> <?php echo $resultado->endereco; ?> </td>

		  	</tr>
		</tbody>



	</table>
</form>
 	<a  href="listacliente.php" class="btn btn-primary float-left"> Voltar </a>
</div>

<!-- FIM CORPO DA PAGINA -->

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="../../../../assets/js/vendor/popper.min.js"></script>
		<script src="../../../../dist/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>


				
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">

			</script>

			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
					
			</script>

			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">		
			</script>

</body>
</html>