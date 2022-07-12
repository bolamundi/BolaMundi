<?php

require 'C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\conexao.php';
$idsel=$_SESSION['idsel'];
$sql="SELECT AVG(Estrelas) as media FROM avaliacoes WHERE Id_selecao=$idsel";

$result=$conn->query($sql);
$row=$result->fetch_assoc();

$media=$row["media"];
?>