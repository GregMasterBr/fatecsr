<?php


function gravar_funcionario($conecta,$funcionario){
	$sql = "insert into funcionarios (nome,idade,departamento,salario,telefone)
		values('{$funcionario['nome']}','{$funcionario['idade']}','{$funcionario['departamento']}','{$funcionario['salario']}',
		'{$funcionario['telefone']}')";					
	
	mysqli_query($conecta,$sql);
					
}

function editar_funcionario($conecta,$funcionario){
		$sql = "UPDATE `projeto`.`funcionarios` SET `nome` = '{$funcinario['nome']}', `idade` = '{$funcinario['idade']}', `departamento` = '{$funcinario['departamento']}', `salario` = '{$funcinario['salario']}', `telefone` = '{$funcinario['telefone']}' WHERE `funcionarios`.`id` = '{$funcinario['id']}';";
		mysqli_query($conecta,$sql);

}
?>