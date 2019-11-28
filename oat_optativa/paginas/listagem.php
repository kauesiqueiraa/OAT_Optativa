
<?php

if (isset($_GET["excluir"])) {
	$id = $_GET["excluir"];
	$sql = "DELETE FROM clientes WHERE id = $id";
	$query = mysqli_query($link, $sql);
	if ($query === TRUE) {
		echo "Registro $id excluído com sucesso!";
	}
}

?>

<h1 style="text-align: center;">Lista de Clientes</h1>


<?php

$sql = "SELECT * FROM clientes";

$query = mysqli_query($link, $sql);

echo "<table>";

while($row = mysqli_fetch_assoc($query)){

?>

<!-- <h1 style="text-align: center;">Clientes</h1> -->


<table class="table">


	<tr>
		<td>
			<?= $row["id"] ?>
		</td>
		<td>
			<?= $row["email"] ?>
		</td>
		<td>			
			<?= $row["nome"] ?>
		</td>
		<td>			
			<?= $row["cpf"] ?>
		</td>
		<td>			
			<?= $row["data_nasc"] ?>
		</td>
		<td>
			<a 
			href="?pg=cadastro&editar=<?= $row["id"] ?>"
			>
				Editar
			</a>
		</td>
		<td>
			<a 
			href="?pg=listagem&excluir=<?= $row["id"] ?>"
			>
				Excluir
			</a>
		</td>
	</tr>

<?php 

}

echo "</table>";

?>
