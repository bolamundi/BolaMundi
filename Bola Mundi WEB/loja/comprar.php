<?php
session_start();

if (!isset($_SESSION['nome'])){
    header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=loja.php");
 
  echo '<script> window.alert("Você precisa estar logado para comprar") </script>';
    exit;
    
    
}
$idProduto=$_GET['prod'];
$idUsuario=$_SESSION['Id_usuario'];

require '../conexao.php';
$sqlBuscarInventario="SELECT * FROM pedidos WHERE Id_produto='$idProduto' && Id_usuario='$idUsuario'";
$result=$conn->query($sqlBuscarInventario);
if ($result->num_rows==1){
    
    header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=loja.php");
 
  echo '<script> window.alert("Você já possui esse produto") </script>';
exit;
}else{
    
    $sqlBuscarProduto="SELECT * FROM produtos WHERE Id='$idProduto'";
$result=$conn->query($sqlBuscarProduto);
    $rowProd=$result->fetch_assoc();
    
    $sqlBuscarUsuario="SELECT * FROM usuarios WHERE Id='$idUsuario'";
    $result=$conn->query($sqlBuscarUsuario);
    $rowUsuario=$result->fetch_assoc();
    $saldo=$rowUsuario['Saldo'];
    $precoProd=$rowProd['Preco'];
    if ($saldo<$precoProd){
        
       
        header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=loja.php");
 
  echo '<script> window.alert("Saldo insuficiente para realizar compra") </script>';
exit;
        
    }else{
        $saldoAtual=$saldo-$precoProd;
        $sqlComprar="INSERT INTO pedidos (Id_usuario,Id_produto) values('$idUsuario','$idProduto')";
       $sqlPagar="UPDATE usuarios SET Saldo=$saldoAtual WHERE Id='$idUsuario'";
        if ($result=$conn->query($sqlComprar) and $result=$conn->query($sqlPagar)){
        
        header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=loja.php");
 echo '<script> window.alert("Compra efetuada") </script>';}else{
        $sqlCorrigir="DELETE FROM pedidos WHERE Id_produto='$idProduto' && Id_usuario='$idUsuario'";
        $result=$conn->query($sqlCorrigir);
         header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=loja.php");
 echo '<script> window.alert("Erro ao efetuar compra") </script>';
    }
        
    }
    
}

?>