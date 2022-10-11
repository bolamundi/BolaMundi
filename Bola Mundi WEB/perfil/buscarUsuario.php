<?php
$idUsuario=$_SESSION['BuscarUsuario'];

require '../conexao.php';
$sqlBuscar="SELECT * FROM usuarios WHERE Id='$idUsuario'";
$result=$conn->query($sqlBuscar);
if ($result->num_rows>0){
    $row=$result->fetch_assoc();
 $nome=$row['Nome'];
    $email=$row['Email'];
    $moeda=$row['Saldo'];
    $xp=$row['Xp'];
    $perfil=$row['Perfil'];
    $rank=$row['Rank'];
    $nivel=$row['Nivel'];
    $pais=$row['Pais'];
    $PaisTorcedor=$row['PaisTorcedor'];
    $TotalGasto=$row['TotalGasto'];
    $TotalGanho=$row['TotalGanho'];
}
    
    
?>