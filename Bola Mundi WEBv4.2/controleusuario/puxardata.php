

<?php
session_start();
//Verifica o acesso.
if($_SESSION['acesso']=="Admin"){


require 'C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\conexao.php';


$sql ="SELECT Data FROM usuarios" ;
$result=$conn->query($sql);
//Executa o sql e faz tratamento de erro.
while ($row=$result->fetch_assoc()) {
	$data=jddayofweek($row["Data"]);
 echo $data;
  
} 


//Fecha a conexão.
	$conn->close();
	
//Se o usuário não tem acesso.
} else {
   header('Location: /index.php'); //Redireciona para o form
    exit; // Interrompe o Script
}

?> 






