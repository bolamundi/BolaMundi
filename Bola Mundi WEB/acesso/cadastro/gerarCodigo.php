<?php
$validador = rand(10000000,99999999);

 $sqlCadastrarCodigo="UPDATE usuarios SET CodigoSenha='$validador' WHERE Id='$idUsuario'";

$filtroCodigo = "SELECT * FROM usuarios where CodigoSenha='$validador'";
$resFiltro=$conn->query($filtroCodigo);

if($resFiltro->num_row >0){
$validador = rand(10000000,99999999);
  $sqlCadastrarCodigo="UPDATE usuarios SET CodigoSenha='$validador' WHERE Id='$idUsuario'";

    
}






?>