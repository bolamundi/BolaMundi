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
       $lvl=25;
        $rank='masterbm.png';
       $sqlAtualizar="UPDATE usuarios SET nivel='$lvl' , rank='$rank' WHERE Id='$idUsuario'";
    
       if ($conn->query($sqlAtualizar)){
           // header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=perfil.php?");
 
  echo '<script> window.alert("Rank atualizado") </script>';
    exit;
            
        }else{
            // header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=perfil.php?");
 
  echo '<script> window.alert("Erro ao atualizar o rank") </script>';
    exit;
            
        }
       
       
        break;
        
        case $xp>=200:
       $lvl=20;
        $rank='diamantebm.png';
       $sqlAtualizar="UPDATE usuarios SET nivel='$lvl' , rank='$rank' WHERE Id='$idUsuario'";
    
       if ($conn->query($sqlAtualizar)){
          //  header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=perfil.php?");
 
  echo '<script> window.alert("Rank atualizado") </script>';
    exit;
            
        }else{
            // header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=perfil.php?");
 
  echo '<script> window.alert("Erro ao atualizar o rank") </script>';
    exit;
            
        }
       
       
        break;
        
        case $xp>=150:
         $lvl=15;
        $rank='ourobm.png';
       $sqlAtualizar="UPDATE usuarios SET nivel='$lvl' , rank='$rank' WHERE Id='$idUsuario'";
    
       if ($conn->query($sqlAtualizar)){
           // header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=perfil.php?");
 
  echo '<script> window.alert("Rank atualizado") </script>';
    exit;
            
        }else{
             //header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=perfil.php?");
 
  echo '<script> window.alert("Erro ao atualizar o rank") </script>';
    exit;
            
        }
       
       
        break;
       
        
        case $xp>=100:
         $lvl=10;
        $rank='pratabm.png';
       $sqlAtualizar="UPDATE usuarios SET nivel='$lvl' , rank='$rank' WHERE Id='$idUsuario'";
    
       if ($conn->query($sqlAtualizar)){
          //  header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=perfil.php?");
 
  echo '<script> window.alert("Rank atualizado") </script>';
    exit;
            
        }else{
             //header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=perfil.php?");
 
  echo '<script> window.alert("Erro ao atualizar o rank") </script>';
    exit;
            
        }
       
       
        break;
    
        case $xp>=50:
         $lvl=5;
        $rank='bronzebm.png';
       $sqlAtualizar="UPDATE usuarios SET nivel='$lvl' , rank='$rank' WHERE Id='$idUsuario'";
    
       if ($conn->query($sqlAtualizar)){
           // header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=perfil.php?");
 
  echo '<script> window.alert("Rank atualizado") </script>';
    exit;
            
        }else{
            // header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=perfil.php?");
 
  echo '<script> window.alert("Erro ao atualizar o rank") </script>';
    exit;
            
        }
       
       
        break;
    
    
    }
}

?>