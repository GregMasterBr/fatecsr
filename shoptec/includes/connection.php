<?php

$host = 'localhost';
$user = '';//root
$pwd = '';
$db = 'fatec';

$conn=mysqli_connect($host, $user, $pwd) or
die ('Não conseguiu fazer a conexão com o servidor');
mysqli_select_db($conn, $db);

?>