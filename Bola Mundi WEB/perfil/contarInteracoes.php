<?php 
require '../conexao.php';

$sqlPalpite="SELECT count(*) as palpites FROM palpites WHERE Id_usuario='$id_usuario'";
$sqlComentario="SELECT count(*) as comentarios FROM comentarios WHERE Id_usuario='$id_usuario'";
$sqlCompra="SELECT count(*) as pedidos FROM pedidos WHERE Id_usuario='$id_usuario'";
$sqlAvaliacao="SELECT count(*) as avaliacoes FROM avaliacoes WHERE Id_usuario='$id_usuario'";

$resPalpite=$conn->query($sqlPalpite);
$resComentario=$conn->query($sqlComentario);
$resCompra=$conn->query($sqlCompra);
$resAvaliacao=$conn->query($sqlAvaliacao);

if($resPalpite->num_rows > 0){
    $rowPalpite=$resPalpite->fetch_assoc();
    $Palpite=$rowPalpite['palpites'];
    
}

if($resComentario->num_rows > 0){
    $rowComentario=$resComentario->fetch_assoc();
    $Comentario=$rowComentario['comentarios'];
    
}

if($resCompra->num_rows > 0){
    $rowCompra=$resCompra->fetch_assoc();
    $Compra=$rowCompra['pedidos'];
    
}

if($resAvaliacao->num_rows > 0){
    $rowAvaliacao=$resAvaliacao->fetch_assoc();
    $Avaliacao=$rowAvaliacao['avaliacoes'];
    
}

$total=$Compra+$Avaliacao+$Palpite+$Comentario;
function porcentagem_nx ( $parcial, $total ) {
if ($parcial!=0){
    return ( $parcial * 100 ) / $total;}
else{
    return 0;
    
}
}

$parcialComentario= round(porcentagem_nx($Comentario, $total),1);
$parcialAvaliacao= round(porcentagem_nx($Avaliacao, $total),1);
$parcialPalpite= round(porcentagem_nx($Palpite, $total),1);
$parcialCompra= round(porcentagem_nx($Compra, $total),1);


?>