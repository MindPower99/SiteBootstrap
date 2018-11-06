<?php 
$nome = $_POST['name'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$recado = $_POST['recado'];

$strcon = mysqli_connect('localhost', 'root', '', 'desenvolvimento de sistemas')
or die('Erro ao conectar Banco de Dados');

$sql = "insert into duvidas values ";
$sql .= "('$nome, $email, $asssunto, $recado')";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Mensagem enviada com sucesso !"; 



?>