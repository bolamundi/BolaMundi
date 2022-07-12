<?php
require 'C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\conexao.php';
//Para ver o número de adms e comuns
$sql="SELECT count(*) as adm FROM usuarios WHERE Acesso='Admin'";
$resultcont=$conn->query($sql);
$row = $resultcont->fetch_assoc();

   $numadm =  $row['adm'];  
    $sql2="SELECT count(*) as usuario FROM usuarios WHERE Acesso='Usuario'";
$resultcont2=$conn->query($sql2);
$row2 = $resultcont2->fetch_assoc();

 $numusuario= $row2['usuario'];

   
    
    


?>  

