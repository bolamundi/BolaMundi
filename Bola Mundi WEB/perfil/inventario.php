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
<div class='divImagemEscolha'>

<a href='trocarImagem.php?prod=".$idProd ."' class='quadro'><img class='imagemEscolha' src='../loja/images/".$rowFoto['Imagem']."'></a>
<p class='nomefoto'>".$rowFoto['Nome']."</p>
</div>


";
       
   }}
    


    
}
}else{
echo "
<div class='divImagemEscolha'>
<p>Você não possui fotos de perfil disponíveis</p>
</div>";}
    
    

?>