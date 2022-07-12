<?php 
require 'C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\conexao.php';
$sql="SELECT * FROM usuarios";
$row=$conn->query($sql)->fetch_assoc();

?>