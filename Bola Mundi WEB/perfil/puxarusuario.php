<?php 

require '../conexao.php';
$sql="SELECT * FROM usuarios";
$row=$conn->query($sql)->fetch_assoc();

?>