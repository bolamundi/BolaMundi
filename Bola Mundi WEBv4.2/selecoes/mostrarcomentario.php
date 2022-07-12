<?php 

require 'C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\conexao.php';
$idsel=$_SESSION["idsel"];

$sql="SELECT * FROM comentarios WHERE Id_selecao=$idsel ORDER BY Id DESC" ;

$res= $conn->query($sql);





?>