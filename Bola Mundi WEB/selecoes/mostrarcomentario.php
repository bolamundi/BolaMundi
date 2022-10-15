<?php 

require '../conexao.php';
$idsel=$_SESSION["idsel"];

$sqlFoto="SELECT * FROM comentarios WHERE Id_selecao=$idsel ORDER BY Id DESC" ;

$res= $conn->query($sqlFoto);
while($row = $res->fetch_assoc()){
    $idUsuario=$row['Id_usuario'];
    $idComent=$row['Id'];
    $sqlFoto="SELECT * FROM usuarios WHERE Id='$idUsuario'";
    $resultadoFoto=$conn->query($sqlFoto);
    while ($rowFoto=$resultadoFoto->fetch_assoc()){
   
    
    
      if(isset($_SESSION['nome']) and $row["Nome"]==$_SESSION['nome']){
              echo "<div class='coments' ><h4><img src='../loja/images/". $rowFoto['Perfil'] ."' style='width:6%;'> Você <a type='button' href='excluircomentario.php?id=". $row["Id"] ."&idsel=". $idsel ."' ><i class='fa fa-trash fa-fw'></i></a></h4> " . " <p>" . $row["Comentario"] . "</p> <p>" . $row["Data"] . "</p> <br><br> </div>";
          }else if($_SESSION["acesso"]=="Admin"){
            echo "<div class='coments' > <h4><img src='../loja/images/". $rowFoto['Perfil'] ."' style='width:6%;'><a href='../perfil/perfil.php?id=". $row['Id_usuario'] ."' style='color:#009933;'>" . $row["Nome"] . "</a><a type='button' href='excluircomentario.php?id=". $row["Id_usuario"] ."&idsel=". $idsel ."' ><i class='fa fa-trash fa-fw'></i></a></h4>" . " <p>" . $row["Comentario"] . "</p> <p>" . $row["Data"] . " </p> <br><br> </div>";
          }else{
              echo "<div class='coments' > <h4><img src='../loja/images/". $rowFoto['Perfil'] ."' style='width:6%;'> <a href='../perfil/perfil.php?id=". $row['Id_usuario'] ."' style='color:#009933;'>" . $row["Nome"] . "</a></h4> <p>" . $row["Comentario"] . "</p> <p>" . $row["Data"] . " </p> <br><br> </div>";
          }
      
      }}





?>