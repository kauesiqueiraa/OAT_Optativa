<?php

$nome = $_POST["email"];
$email = $_POST["nome"];
$cpf = $_POST["cpf"];
$data_nasc = $_POST["data_nasc"];

if(isset($_GET["editar"]) && $_GET["editar"] != 0){
	$id = $_GET["editar"];
	$sql = "UPDATE clientes SET email='$email', nome='$nome', cpf='$cpf',
	data_nasc='$data_nasc' WHERE id = $id";
}
else{
	$sql = "INSERT INTO clientes (nome, email, cpf, data_nasc) VALUES ('$nome', '$email', '$cpf', '$data_nasc')";
}

$query = mysqli_query($link, $sql);

if ($query === TRUE) {

	echo '<div class="alert alert-success" role="alert">Cadastro Realizado!</div>';	

}else{
	echo '<div class="alert alert-danger" role="alert">Opa! Você esqueceu de alguma coisa. Formulário incompleto.</div>';
}

?>

<br><br>
<a href="?pg=listagem">Clientes Cadastrados</a>
