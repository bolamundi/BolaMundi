<?php
require '../conexao.php';

$sql="SELECT * FROM palpites WHERE Id_usuario='$id_usuario'";
$result=$conn->query($sql);
if ($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        	if (!$modoVizualizacao){
  		echo "<li>". $row["Palpite"] . "<a class='apagarPalpite' href='apagarPalpite.php?id=".$row['Id']."'>&times</a></li>";
  		}else { 
  		    echo "<li>". $row["Palpite"] . "</li>";
  		}
   
    }
}
?>