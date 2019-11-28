   <!-- Services -->
   <section class="page-section" id="services">
		<div class="container">
      		<div class="row">
        		<div class="col-lg-12 text-center">
         			<h1>Banco Digital CPU</h1>
          			<h2>Seja Bem Vindo a um Banco 100% Digital</h2>
        		</div>
      		</div>
      		<div class="row text-center">
        		        			
          			<h4>Contas</h4>
          			<p>Possuimos uma base solida de clientes, onde todos os dados são criptografados, da forma mais segura possivel.</p>

          			<img height="250px" Width=" 100%" src="https://3eaf214443cb92a1.cdn.gocache.net/wp-content/uploads/2019/08/banking-760x450.jpg">
        		
          			<h4>Desenvolvimento Web</h4>
          			<p>Nossa empresa lhe oferece o desenvolvimento de aplicações web e websites sob medida com redimencionamento responsivo de forma eficás e com baixo custo</p>
        		
      		</div>
    	</div>
  	</section>

	<!-- PHP para inserção no banco de dados -->
    <?php
		$actionEditar = "";
		$id = 0;
		$nome = NULL;
		$email = NULL;
		$cpf = NULL;
		$data_nasc = NULL;

		if (isset($_GET["editar"])) {
			$id = $_GET["editar"];
			$sql = "SELECT * FROM dados_user WHERE id = $id";
			$query = mysqli_query($link, $sql);
			if($row = mysqli_fetch_assoc($query)){
				$nome = $row["nome"];
				$email = $row["email"];
				$cpf = $row["cpf"];
				$data_nasc = $row["data_nasc"];
			}
			else{
				echo "Falha ao carregar registro!";
			}
			$actionEditar = "&editar=$id";
		}
	?>