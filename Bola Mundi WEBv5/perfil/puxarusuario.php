<?php 
require 'C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\conexao.php';

$sql="SELECT * FROM usuarios";
$row=$conn->query($sql)->fetch_assoc();

?>