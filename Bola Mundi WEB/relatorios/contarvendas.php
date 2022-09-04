

<?php



require '../conexao.php';

$sql="SELECT Numero_vendas,Nome FROM produtos";

$result=$conn->query($sql);
$quantidadeVendas=array();
$nomeProduto=array();

if($result->num_rows>0){
while($row=$result->fetch_assoc()){
     
     $quantidadeVendas[]= $row['Numero_vendas'];
 $nomeProduto[]=$row['Nome'];
}
}else{
echo "Nenhum resultado ";    
    
}




?> 






