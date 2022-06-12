<?php 
require "conexao.php";

$sql="SELECT * FROM comentarios ORDER BY Id DESC" ;

$res= $conn->query($sql);





?>