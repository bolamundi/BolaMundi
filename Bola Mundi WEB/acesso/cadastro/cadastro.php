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
   header("refresh:2 ;url=cadastrar.html");
 
  echo " <script>
  window.alert('Email ou nome já cadastrados')
  
  </script>";  

    
}else{

//Cria um número inteiro aleatório dentro do intervalo
$validador = rand(10000000,99999999);

//Insere na tabela os valores dos campos
$sql = "INSERT INTO usuarios(nome,email,senha,acesso, Status,Data,Pais,Validador) values('$camponome','$campoemail','$hashsenha','$campoacesso','aguardando','$datacadastro','$campopais', '$validador')";

if($conn->query($sql) === TRUE ){
	//Se o cadastro acontecer corretamente
	header("refresh:2 ;url=../../../pt-br/index.php");
	echo "<script>window.alert('Gravado com sucesso')</script>";
	
	//Envie email para validar a conta.
    require 'enviaremail.php';  

//Conteúdo do email de validação
$texto = "Olá, boa tarde.<br> Agradecemos seu cadastro, seja bem-vindo ao Bola Mundi. <br> Antes de fazer o login, precisamos confirmar seu email. Por favor copie e cole o seguinte link na barra de navegação e faça as mudanças requisitadas. <br> Na barra de pesquisa do site apague o INDEX.PHP e adicione:
/acesso/cadastro/usuariovalidaremail.php?id=()&validador=()<br>
No ID, apague os parenteses e escreva seu email: ". $campoemail ." <br> No validador, apague os parênteses e coloque os seguintes números " . $validador ."" ;

enviaremail($camponome, $campoemail, 'Validar conta', $texto);

	
}else{
	header("refresh:5;url=../../../pt-br/index.php");
	echo "Error: ". $sql . "<br>" . $conn->error;
}
    
}
$conn->close();
?>