<?php

$host = 'localhost';
$user = '';//root
$pwd = '';
$db = 'projeto';

$ligax=mysqli_connect($host, $user, $pwd) or
die ('Não conseguiu fazer a conexão com o servidor');
mysqli_select_db($ligax, $db);

if($ligax){
	//echo "Parabéns!! A conexão ao banco de dados ocorreu normalmente!. " ;
}

?>