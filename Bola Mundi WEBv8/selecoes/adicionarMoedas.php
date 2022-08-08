<?php 
session_start();
require '../conexao.php';



//pegar o timestamp do banco
include 'puxarRecompensaTimestamp.php';

date_default_timezone_set("America/Sao_Paulo");



$idsel=$_SESSION["idsel"];
//pegar o saldo atual 
$sql="SELECT Saldo FROM usuarios WHERE id=".$id_usuario;
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$saldo=$row['Saldo'];
$saldo+=5;

//timestamp atual


$agora=strtotime("now");

$proxRecompensa= $agora - strtotime($ultimoResgate);
$agora=date("Y-m-d H:i:s",$agora);


if(floor($proxRecompensa/3600)>=24){

    
$atualizarTemp="UPDATE usuarios SET RecompensaTimestamp='$agora' WHERE id=".$id_usuario;
$addMoeda= "UPDATE usuarios SET Saldo=$saldo WHERE id=".$id_usuario;


if($conn->query($atualizarTemp)){
    $operacao=true;
    
    
}else{
$operacao=false;
    header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=selecao.php?id=$idsel");
 
  echo '<script> window.alert("Erro ao atualizar seu temporizador") </script>';
exit;
    
}    
    


if($conn->query($addMoeda) and $operacao){
    header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=selecao.php?id=$idsel");
 
  echo '<script> window.alert("5 moedas foram adicionadas ao seu perfil") </script>';
     exit;
    
}else if($operacao){
    header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=selecao.php?id=$idsel");
 
  echo '<script> window.alert("Erro ao atualizar seu saldo") </script>';
 exit;
    
}
}else{
    header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=selecao.php?id=$idsel");
 
  echo '<script> window.alert("Espere 24 horas para resgatar suas moedas") </script>'; 
     exit;
}

?>