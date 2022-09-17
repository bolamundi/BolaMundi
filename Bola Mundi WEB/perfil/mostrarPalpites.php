<?php
require '../conexao.php';
$idUsuario=$_SESSION['Id_usuario'];
$sql="SELECT * FROM palpites WHERE Id_usuario='$idUsuario'";
$result=$conn->query($sql);
if ($result->num_rows>0){
    while($row=$result->fetch_assoc()){
    echo "<li>". $row["Palpite"] . "</li>";
    }
}
?>