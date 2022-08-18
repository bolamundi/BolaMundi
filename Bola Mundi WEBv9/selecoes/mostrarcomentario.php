<?php 

require '../conexao.php';
$idsel=$_SESSION["idsel"];

$sql="SELECT * FROM comentarios WHERE Id_selecao=$idsel ORDER BY Id DESC" ;

$res= $conn->query($sql);





?>