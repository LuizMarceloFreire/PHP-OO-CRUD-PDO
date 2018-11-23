<?php

function __autoload($class_name){
	require_once 'classes/' . $class_name . '.php';
}

?>

<!DOCTYPE html>

<html lang="pt-br">
	
	<head>
		<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
				<meta name="description" content="primeira">
					<meta name="author" content="Luiz">
						<link rel="icon" href="../../../../favicon.ico">
							<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"crossorigin="anonymous">
								<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">



		<title>Home</title>
	
	



		<!-- Bootstrap core CSS -->

				<link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->

				<link href="navbar-top.css" rel="stylesheet">
	</head>

<body>

<?php

$cliente = new Clientes();

if(isset($_POST['cadastrar'])):
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

	# Insert

	if($cliente->insert()){
		
	}

endif;


?>


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
					<button class="btn btn-primary my-3 my-sm-0" type="submit">Buscar 
						
					</button>

				</form>
			</div>
		</nav>

</div>

<br>
<br>
<br>
<br>

<!-- FIM TOPO PAGINA -->

<!-- CORPO DA PAGINA -->
<div class="container">
	<div class="jumbotron" align="center">
				
					
		<fieldset class="col-lg-6">
			<h1 class="display-5"> 
				<img style="padding-bottom: 10px;" width="40" src="\LUIZ-MARCELO\PHP POO  CRUD\img\user.png"> Cadastro Cliente </h1> <br/>

				<form class="col-md-8" action="" method="POST">
				
					<label for="nome"><strong> Nome</strong></label>
						<input type="text" class="form-control" id="nome" name="nome" autofocus required placeholder="Nome">
  				
  					

					<label for="pessoa"> <strong> Pessoa </strong></label>

					<select class="form-control" name="pessoa" id="pessoa" required>

						<option disabled selected id="tipo-pessoa" name="tipo-pessoa"> Selecione uma opção... 
						</option>	
						<option value="Fisica" name="pfisica"> Física </option>		
						<option value="Juridica"> Jurídica </option>			

						</select>

							

						
						<label for="cpf"><strong> CPF (Pessoa Física) </strong>	</label>
							<input type="cpf" class="form-control" id="cpf" name="cpf"  placeholder="000.000.000-00" data-mask="999.999.999-99">
						
						 <label for="cnpj"><strong> CNPJ (Pessoa Jurídica)</strong>	</label>
							<input type="cnpj" class="form-control" id="cnpj" name="cnpj"  placeholder="00.000.000/0000-00" data-mask="99.999.999/9999-99">
					

				
					
			
					<label for="endereco"><strong> Endereço </strong>	</label>
						<input type="text" class="form-control" id="endereco" name="endereco" autofocus required placeholder="Endereço"> 
<br>
			
					<input type="submit" class="btn btn-primary" value="Cadastrar" id="cadastrar" name="cadastrar">

					<input type="reset" class="btn btn-primary" value="Limpar">

				</form>

		</fieldset>
			
			
	</div>
</div>

<!-- FIM CORPO DA PAGINA -->



<!-- RODAPE -->

<div class="rodape">
        <ul class="nav nav-tabs">
			<li class="nav-item">
				<a href="#" class="nav-link active">Menu</a>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ações</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="index.php">Home</a>
						<a class="dropdown-item" href="index.php">Cadastro Cliente</a>
							<a class="dropdown-item" href="listacliente.php">Lista Clientes</a>
					
				</div>
			</li>
			
		
		</ul>
			

</div>


<!-- FIM RODAPE -->


		<!-- Bootstrap core JavaScript ================================================== -->

		<!-- Placed at the end of the document so the pages load faster -->

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

		<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')
	   </script>

		<script src="../../../../assets/js/vendor/popper.min.js">
			
		</script>

		<script src="../../../../dist/js/bootstrap.min.js">
			
		</script>

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="../../../../assets/js/ie10-viewport-bug-workaround.js">
			
		</script>


				
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">

		</script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
					
		</script>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">		
	    </script>



	</body>
</html>