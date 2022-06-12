<?php

require 'conexao.php';
$sql="SELECT Estrelas FROM avaliacoes ";


$result=$conn->query($sql);

//ver se precisa fazer um if para ver se a conexão aconteceu
$num_avaliacoes=0;
$total_estrelas=0;
//ver se precisa fazer um if para ver se a conexão aconteceu
while($row = $result->fetch_assoc()) {
        $total_estrelas+=$row["Estrelas"] ;
	$num_avaliacoes++;

	  }
	  
	  if($result->num_rows > 0){
   
$media=$total_estrelas/$num_avaliacoes;
  
   




   }else{
       $media=0;
       
   }
   
	
	  
?>