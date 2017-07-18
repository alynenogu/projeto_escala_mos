<?php
	

function insereInformacoes($conexao,$nome,$idade,$sexo,$numero){
	$query = "insert into informacoes(nome, idade, sexo, numero) values ('{$nome}',{$idade},'{$sexo}',{$numero})";
	 $resultadoDaInsercao = mysqli_query($conexao, $query);
	return $resultadoDaInsercao;
}
