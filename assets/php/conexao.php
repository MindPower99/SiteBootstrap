<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "desenvolvimento de sistemas";

$mysql = new mysqli($host, $usuario, $senha, $bd);

if ($mysql->connect_errno) 
		echo "Falha na conexão: (".mysqli->connect_errno.") ".mysqli->connect_error;


?>