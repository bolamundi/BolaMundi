<?php 
session_start();
require '../conexao.php';
$idUsuario=$_SESSION['Id_usuario'];
$sqlMostrarImagens="SELECT * FROM pedidos WHERE Id_usuario='$idUsuario'";
$resultado=$conn->query($sqlMostrarImagens);

 if ($resultado->num_rows>0){
   
while($row=$resultado->fetch_assoc()){

    $idProd=$row['Id_produto'];
 
    $sqlBuscarFoto="SELECT * FROM produtos WHERE Id='$idProd'";
   $res=$conn->query($sqlBuscarFoto);
    
    if ($res->num_rows>0){
    while($rowFoto=$res->fetch_assoc()){
echo "
<div class=inventario>

<img src='../loja/images/".$rowFoto['Imagem']."'>

</div>

";
       
   }}
    


    
}
}
?>