<?php 


$idsel=$_SESSION["idsel"];
echo " 
      <tr>
     
        <th>Jogador</th>
        <th>Número</th>
        <th>Posição</th>
      </tr>";
require '../conexao.php';

$sql="SELECT * FROM jogadores2 WHERE Id_selecao='$idsel' and Posicao='Goleiro'";
$result=$conn->query($sql);
while($rowgol=$result->fetch_assoc()){

      echo "  <tr>
          <td>" . $rowgol['Nome'] ."</td>
          <td>" . $rowgol['Numero'] ."</td>
          <td>" . $rowgol['Posicao'] ."</td>
        </tr>";
     }
       $sql="SELECT * FROM jogadores2 WHERE Id_selecao='$idsel' and Posicao='Lateral-direito'";
$result=$conn->query($sql);
while($rowle=$result->fetch_assoc()){

      echo "  <tr>
          <td>" . $rowle['Nome'] ."</td>
          <td>" . $rowle['Numero'] ."</td>
          <td>" . $rowle['Posicao'] ."</td>
        </tr>";
     }
      $sql="SELECT * FROM jogadores2 WHERE Id_selecao='$idsel' and Posicao='Zagueiro'";
$result=$conn->query($sql);
while($rowzag=$result->fetch_assoc()){

      echo "  <tr>
          <td>" . $rowzag['Nome'] ."</td>
          <td>" . $rowzag['Numero'] ."</td>
          <td>" . $rowzag['Posicao'] ."</td>
        </tr>";
     }
      $sql="SELECT * FROM jogadores2 WHERE Id_selecao='$idsel' and Posicao='Lateral-esquerdo'";
$result=$conn->query($sql);
while($rowld=$result->fetch_assoc()){

      echo "  <tr>
          <td>" . $rowld['Nome'] ."</td>
          <td>" . $rowld['Numero'] ."</td>
          <td>" . $rowld['Posicao'] ."</td>
        </tr>";
     }
      $sql="SELECT * FROM jogadores2 WHERE Id_selecao='$idsel' and Posicao='Volante'";
$result=$conn->query($sql);
while($rowvol=$result->fetch_assoc()){

      echo "  <tr>
          <td>" . $rowvol['Nome'] ."</td>
          <td>" . $rowvol['Numero'] ."</td>
          <td>" . $rowvol['Posicao'] ."</td>
        </tr>";
     }
        $sql="SELECT * FROM jogadores2 WHERE Id_selecao='$idsel' and Posicao='Meia'";
$result=$conn->query($sql);
while($rowmei=$result->fetch_assoc()){

      echo "  <tr>
          <td>" . $rowmei['Nome'] ."</td>
          <td>" . $rowmei['Numero'] ."</td>
          <td>" . $rowmei['Posicao'] ."</td>
        </tr>";
     }
         $sql="SELECT * FROM jogadores2 WHERE Id_selecao='$idsel' and Posicao='Ponta direita'";
$result=$conn->query($sql);
while($rowpd=$result->fetch_assoc()){

      echo "  <tr>
          <td>" . $rowpd['Nome'] ."</td>
          <td>" . $rowpd['Numero'] ."</td>
          <td>" . $rowpd['Posicao'] ."</td>
        </tr>";
     }
      $sql="SELECT * FROM jogadores2 WHERE Id_selecao='$idsel' and Posicao='Atacante'";
$result=$conn->query($sql);
while($rowata=$result->fetch_assoc()){

      echo "  <tr>
          <td>" . $rowata['Nome'] ."</td>
          <td>" . $rowata['Numero'] ."</td>
          <td>" . $rowata['Posicao'] ."</td>
        </tr>";
     }
     
    $sql="SELECT * FROM jogadores2 WHERE Id_selecao='$idsel' and Posicao='Ponta esquerda'";
$result=$conn->query($sql);
while($rowpe=$result->fetch_assoc()){

      echo "  <tr>
          <td>" . $rowpe['Nome'] ."</td>
          <td>" . $rowpe['Numero'] ."</td>
          <td>" . $rowpe['Posicao'] ."</td>
        </tr>";
     }

  
  
?>