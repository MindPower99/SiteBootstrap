<?php 
header('Acess-Control-Allow-Origin: *');
header('Content-Type: aplication-json');

$conn = new mysqli('localhost', 'root', '','Desenvolvimento de Sistemas');

$request = $_SERVER['REQUEST_METHOD'] == 'GET' ? $_GET : $_POST;

switch ($request['acao']) {
	case "EnviarMensagem":
		$nome = addlashes($_POST['nome']);
		$email = addlashes($_POST['email']);
		$assunto = addlashes($_POST['assunto']);
		$recado = addlashes($_POST['recado']);
		
		$sql = "INSERT INTO Duvidas (Nome, Email, Assunto, Recado) VALUES('$nome', '$email', '$assunto', '$recado')";
		
	

}