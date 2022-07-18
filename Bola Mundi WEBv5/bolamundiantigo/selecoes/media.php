<?php
require 'conexao.php';

$sql="SELECT AVG(Estrelas) as media FROM avaliacoes";

$result=$conn->query($sql);
$row=$result->fetch_assoc();

$media=$row["media"];
?>