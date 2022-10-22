<?php 

require '../conexao.php';
$idsel=$_SESSION["idsel"];
$id = $_GET["pag"];

//Quantidade de registros a serem exibidos
$total = 15;

//Indica o registro limite para paginação
if($id!=1){
    $id = $id -1;
    $id = $id * $total + 1;
}

$id--;

//Cria o SQL com limites de página ordenado por id
$sql = "SELECT * FROM comentarios WHERE Id_selecao='$idsel' ORDER BY id DESC LIMIT $id, $total";

//Conta a quantidade total de registros
$sql1 = "SELECT count(*) as contagem FROM comentarios";

//Executa o SQL
$result = $conn->query($sql);
$result1 = $conn->query($sql1);

//Recupera o resultado da contagem
$row1 = $result1->fetch_assoc();
$contagem = $row1["contagem"];

if($contagem%$total==0){
    $contagem=$contagem/$total;
}else{
    $contagem=$contagem/$total + 1;    
}

  //Se a consulta tiver resultados
   if ($result->num_rows > 0) {


//$sqlComent="SELECT * FROM comentarios WHERE Id_selecao=$idsel ORDER BY Id DESC" ;

//$result= $conn->query($sqlComent);
while($row = $result->fetch_assoc()){
    $idUsuario=$row['Id_usuario'];
    $idComent=$row['Id'];
    $sqlFoto="SELECT * FROM usuarios WHERE Id='$idUsuario'";
    $resultadoFoto=$conn->query($sqlFoto);
    while ($rowFoto=$resultadoFoto->fetch_assoc()){
   
    
    
      if(isset($_SESSION['nome']) and $row["Nome"]==$_SESSION['nome']){
              echo "<div class='coments' ><h4><img src='../loja/images/". $rowFoto['Perfil'] ."' style='width:6%;'> Você <a type='button' href='excluircomentario.php?id=". $row["Id"] ."&idsel=". $idsel ."' ><i class='fa fa-trash fa-fw'></i></a></h4> " . " <p>" . $row["Comentario"] . "</p> <p>" . $row["Data"] . "</p> <br><br> </div>";
          }else if($_SESSION["acesso"]=="Admin"){
            echo "<div class='coments' > <h4><img src='../loja/images/". $rowFoto['Perfil'] ."' style='width:6%;'><a href='../perfil/perfil.php?id=". $row['Id_usuario'] ."' style='color:#009933;'>" . $row["Nome"] . "</a><a type='button' href='excluircomentario.php?id=". $row["Id"] ."&idsel=". $idsel ."' ><i class='fa fa-trash fa-fw'></i></a></h4>" . " <p>" . $row["Comentario"] . "</p> <p>" . $row["Data"] . " </p> <br><br> </div>";
          }else{
              echo "<div class='coments' > <h4><img src='../loja/images/". $rowFoto['Perfil'] ."' style='width:6%;'> <a href='../perfil/perfil.php?id=". $row['Id_usuario'] ."' style='color:#009933;'>" . $row["Nome"] . "</a></h4> <p>" . $row["Comentario"] . "</p> <p>" . $row["Data"] . " </p> <br><br> </div>";
          }
      
      }
      
    
    
    
}
echo '<div class="pagination">';
          for($i=1; $i <= $contagem; $i++) {
              echo '<a href="selecao.php?pag='.$i.'&id='.$idsel.'" class="pag">'.$i .'</a>';
          } 
           
          
        echo '</div>';


}


?>