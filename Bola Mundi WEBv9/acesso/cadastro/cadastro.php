<?php

date_default_timezone_set("America/Sao_Paulo");

$camponome=filter_input(INPUT_POST, "nome");
$campoemail=filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$camposenha=filter_input(INPUT_POST, "senha");
$campoacesso='Usuario';
$dataobj= new DateTime();
$formato = 'Y-m-d';
$datacadastro = date($formato) ;

    
$hashsenha= password_hash($camposenha, PASSWORD_BCRYPT);


require '../../conexao.php';


$filtroemail = "SELECT * FROM usuarios where email='$campoemail' ";
$filtronome = "SELECT * FROM usuarios where nome='$camponome' ";
$retornoemail=$conn->query($filtroemail);
$retornonome=$conn->query($filtronome);
$rownome=$retornonome->fetch_assoc();
$rowemail=$retornoemail->fetch_assoc();

if($rowemail["Email"]===$campoemail || $rownome["Nome"]===$camponome){
   header("refresh:30 ;url=cadastrar.html");
 
  echo " <script>
  window.alert('Email ou nome já cadastrados')
  
  </script>";  

    
}else{

//Cria um número inteiro aleatório dentro do intervalo
$validador = rand(10000000,99999999);

//Insere na tabela os valores dos campos
$sql = "INSERT INTO usuarios(nome,email,senha,acesso, Status,Data,Validador) values('$camponome','$campoemail','$hashsenha','$campoacesso','aguardando','$datacadastro', '$validador')";

if($conn->query($sql) === TRUE ){
	//Se o cadastro acontecer corretamente
	header("refresh:30 ;url=/index.php");
	echo "<script>window.alert('Gravado com sucesso')</script>";
	
	//Envie email para validar a conta.
    require 'enviaremail.php';  

//Conteúdo do email de validação
$texto = "Olá, boa tarde.<br> Agradecemos seu cadastro, seja bem-vindo ao Bola Mundi <br> usuariovalidaremail.php: " . $campoemail . "<br> validador= " . $validador ."" ;

enviaremail($camponome, $campoemail, 'Validar conta', $texto);

	
}else{
	header("refresh:5;url=/index.php");
	echo "Error: ". $sql . "<br>" . $conn->error;
}
    
}
$conn->close();
?>