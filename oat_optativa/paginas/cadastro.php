<?php

$actionEditar = "";
$id = 0;
$email = NULL;
$nome = NULL;
$cpf = NULL;
$data_nasc = NULL;

if (isset($_GET["editar"])) {
	$id = $_GET["editar"];
	$sql = "SELECT * FROM clientes WHERE id = $id";
	$query = mysqli_query($link, $sql);
	if($row = mysqli_fetch_assoc($query)){
		$email = $row["email"];
		$nome = $row["nome"];
		$cpf = $row["cpf"];
		$data_nasc = $row["data_nasc"];
	}
	else{
		echo "Falha ao carregar registro!";
	}
	$actionEditar = "&editar=$id";
}

?>
<div class="nome">
	<h2>Cadastro de Novo Cliente</h2>
</div>

<div class="row">

		<form action="?pg=processar<?= $actionEditar ?>" method="POST">

		<div class="form-group">
			<label><b>E-mail</label>
			<input type="email" class="form-control" style="background: black; color: yellow;" name="email" aria-describedby="emailHelp" placeholder="Digite seu e-mail">
			<small id="emailHelp" class="form-text text-muted"></small>
		</div>

		<div class="form-group">
			<label >Nome</label>
			<input type="text" class="form-control" style="background: black; color: yellow;" name="nome" placeholder="Digite seu nome completo">
		</div>

		<div class="form-group">
			<label >CPF</label>
			<input type="text" class="form-control" style="background: black; color: yellow;" name="cpf" placeholder="Digite seu CPF">
		</div>

		<div class="form-group">
			<label >Data de Nascimento </b></label>
			<input type="text" class="form-control" style="background: black; color: yellow;" name="data_nasc" placeholder="Digite sua data de aniversário">
		</div>

		<button type="submit" style="background: black; color: yellow;" class="btn btn-primary">Enviar</button>
		</form>

</div>