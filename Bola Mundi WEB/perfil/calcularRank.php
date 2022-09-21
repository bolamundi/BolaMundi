<?php 
session_start();
require '../conexao.php';
$idUsuario=$_SESSION['Id_usuario'];
$sql="SELECT * FROM usuarios WHERE Id='$idUsuario'";
$result=$conn->query($sql);
if ($result->num_rows>0){
   $row=$result->fetch_assoc();
   $xp=$row["Xp"];
    //50 xp nv 5 bronze
    switch($xp){
    
    case $xp>=250:
        echo 'Master';
        echo 'lv25';
        $sqlAtualizar="UPDATE usuarios SET Nivel='25' Rank='Master' WHERE Id='$idUsuario'";
        if ($conn->query($sqlAtualizar)){
            header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=perfil.php?");
 
  echo '<script> window.alert("Rank atualizado") </script>';
    exit;
            
        }else{
             header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=perfil.php?");
 
  echo '<script> window.alert("Erro ao atualizar o rank") </script>';
    exit;
            
        }
        
        break;
        
        case $xp>=200:
        echo 'Diamante';
        echo 'lv20';
       $sqlAtualizar="UPDATE usuarios SET Nivel='20' Rank='Diamante' WHERE Id='$idUsuario'";
       if ($conn->query($sqlAtualizar)){
            header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=perfil.php?");
 
  echo '<script> window.alert("Rank atualizado") </script>';
    exit;
            
        }else{
             header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=perfil.php?");
 
  echo '<script> window.alert("Erro ao atualizar o rank") </script>';
    exit;
            
        }
       
       
        break;
        
        case $xp>=150:
        echo 'Ouro';
        echo 'lv15';
        
        break;
        
        case $xp>=100:
        echo 'Prata';
        echo 'lv10';
        
        break;
    
        case $xp>=50:
        echo 'Bronze';
        echo 'lv5';
        
        break;
    
    
    }
}

?>