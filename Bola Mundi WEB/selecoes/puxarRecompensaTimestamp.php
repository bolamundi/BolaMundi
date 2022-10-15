<?php

session_start();

require '../conexao.php';
$nome=$_SESSION['nome'];
date_default_timezone_set("America/Sao_Paulo");


$puxarId="SELECT * FROM usuarios WHERE Nome='$nome'";
$result=$conn->query($puxarId);
$row=$result->fetch_assoc();




$id_usuario=$row["Id"];
$totalGanho=$row['TotalGanho'];
$sql="SELECT RecompensaTimestamp FROM usuarios WHERE id=".$id_usuario;
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$ultimoResgate=$row['RecompensaTimestamp'];

?>