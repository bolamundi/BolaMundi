

<?php


session_start();
//Verifica o acesso.

if($_SESSION['acesso']=="Admin"){

require '../conexao.php';


$sql ="SELECT Data FROM usuarios" ;
$result=$conn->query($sql);
//Executa o sql e faz tratamento de erro.

$usuarios= array(0);


for ($i = 2 ; $i<=52 ; $i++ ){
$usuarios[]=0;


}

$year=date("Y");

while ($row=$result->fetch_assoc()) {

$date = new DateTime($row["Data"]);
$week = $date->format("W");
$anoRow=$date->format("Y");
if ($anoRow == $year){
$usuarios[$week-1]+= 1;
}
}



//Fecha a conexão.
	$conn->close();
	
//Se o usuário não tem acesso.
} else {
   header('Location: ../index.php'); //Redireciona para o form
    exit; // Interrompe o Script
}

?> 






