<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: aplication-json');

$conn = new mysqli('localhost', 'root', '','desenvolvimento de sistemas');

$request = $_SERVER['REQUEST_METHOD'] == 'POST' ? $_GET : $_POST;

//switch ($request['acao']) {
	
	//case "EnviarMensagem":
	
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$assunto = $_POST['assunto'];
		$recado = $_POST['recado'];
		
		$sql = "INSERT INTO duvidas (Nome, Email, Assunto, Recado) VALUES('$nome', '$email', '$assunto', '$recado')";
		$arr = array();
		$arr['result'] = false;
		$arr['err'] = 'vazio';
		
		if($con->query($sql)) {
			$arr['result'] = true;
			$arr['alert'] = false;
			$arr['err'] = "Conexão Ok";
		}
		
		else {
			$arr['result'] = false;
			$arr['alert'] = true;
			$arr['err'] = "Conexão Negada '$sql'";
		}
		
		echo json_encode($arr);	
		echo json_encode($arr, json_unescaped_unicode);
		
	break;
		
	

//}

?>