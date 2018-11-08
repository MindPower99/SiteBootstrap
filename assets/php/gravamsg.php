<?php 

include('conexao.php');

$name = $_POST['name'];
$email = $_POST['email'];
$category = $_POST['category'];
$message = $_POST['message'];

$strcon = mysqli_connect('localhost', 'root', '', 'desenvolvimento de sistemas')
or die('Erro ao conectar Banco de Dados');

$sql=$mysqli->prepare("insert into duvidas values (?,?,?,?)");
$sql ->bind_param("ssss",$name,$email,$category,$message);
$sql->execute();
$sql->store_result();
$result=$sql->affected_rows;

if ($result>0) {
	echo "	<script>
				alert('Dados inseridos com sucesso');
				window.location.href='../../elements.html';
			
			</script>
		";
}


?>