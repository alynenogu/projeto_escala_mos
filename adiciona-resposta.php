<?php include("cabecalho.php");
		include("conecta.php"); 
		include("banco-informacoes.php");?>

<?php

/*	function insereInformacoes($conexao,$nome,$idade,$sexo,$numero){
		$query ="insert into informacoes(nome, idade, sexo, numero) values ('{$nome}',{$idade},'{$sexo}',{$numero})";
		return mysqli_query($conexao,$query);

	}*/
	$nome = $_POST["nome"];
	$idade = $_POST["idade"];
	$sexo = $_POST["sexo"];
	$numero = $_POST["numero"];
	

	
	//mysqli_query($conexao,$query);
	//mysqli_close($conexao);

	
		if(insereInformacoes($conexao,$nome,$idade,$sexo,$numero)){
			?>
			<p class="text-success"> <?= $nome;?>, obrigada por sua participação </p>
			
		<?php }else{ 
				$msq = mysql_error();

			?>
				<p class="text-danger">Tente novamente mais tarde! <?=$msq ?></p>



		<?php 
			}
				?>

	
	
	
<?php  include("rodape.php"); ?>