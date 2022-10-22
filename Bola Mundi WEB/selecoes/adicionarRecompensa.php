<?php 
session_start();
require '../conexao.php';



//pegar o timestamp do banco
include 'puxarRecompensaTimestamp.php';

date_default_timezone_set("America/Sao_Paulo");



$idsel=$_SESSION["idsel"];
//pegar o saldo atual 
$sqlPegarMoeda="SELECT Saldo FROM usuarios WHERE id=".$id_usuario;
$result=$conn->query($sqlPegarMoeda);
$rowSaldo=$result->fetch_assoc();
$saldo=$rowSaldo['Saldo'];
$saldo+=5;
$totalGanho+=5;
//pegar o xp atual 
$sqlPegarXp="SELECT Xp FROM usuarios WHERE id=".$id_usuario;
$result=$conn->query($sqlPegarXp);
$rowXP=$result->fetch_assoc();
$xp=$rowXP['Xp'];
$xp+=10;

//timestamp atual


$agora=strtotime("now");

$proxRecompensa= $agora - strtotime($ultimoResgate);
$agora=date("Y-m-d H:i:s",$agora);


if(floor($proxRecompensa/3600)>=24){

    
$atualizarTemp="UPDATE usuarios SET RecompensaTimestamp='$agora' WHERE id=".$id_usuario;
$addMoeda= "UPDATE usuarios SET Saldo=$saldo , TotalGanho='$totalGanho' WHERE id=".$id_usuario;
$addXp= "UPDATE usuarios SET Xp=$xp WHERE id=".$id_usuario;

if($conn->query($atualizarTemp)){
    $operacao=true;
    
    
}else{
$operacao=false;
    header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=selecao.php?id=$idsel&pag=1");
 
  echo '<script> window.alert("Erro ao atualizar seu temporizador") </script>';
exit;
    
}    
    


if($conn->query($addMoeda) and $conn->query($addXp) and $operacao){
    header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=selecao.php?id=$idsel&pag=1");
 include '../perfil/calcularRank.php';
  echo '<script> window.alert("5 moedas e 10 de xp foram adicionadas ao seu perfil") </script>';
     exit;
    
}else if($operacao){
     $sqlVoltarTempo="UPDATE usuarios SET RecompensaTimestamp='$ultimoResgate' WHERE id=".$id_usuario;
 $conn->query($sqlVoltarTempo);
 
    header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=selecao.php?id=$idsel&pag=1");

  echo '<script> window.alert("Erro ao atualizar seu saldo") </script>';
 exit;
    
}
}else{
    header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=selecao.php?id=$idsel&pag=1");
 
  echo '<script> window.alert("Espere 24 horas para resgatar suas moedas e xp") </script>'; 
     exit;
}




?>