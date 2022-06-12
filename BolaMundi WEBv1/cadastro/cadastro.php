<?php



$camponome=$_POST["nome"];
$campoemail=$_POST['email'];
$camposenha=$_POST['senha'];
$campoacesso='Usuario';
    



require 'conexao.php';//Já faz a conexão automática com o db

$filtroemail = "SELECT * FROM usuarios where email='$campoemail' ";
$filtronome = "SELECT * FROM usuarios where nome='$camponome' ";
$retornoemail=$conn->query($filtroemail);
$retornonome=$conn->query($filtronome);
$rownome=$retornonome->fetch_assoc();
$rowemail=$retornoemail->fetch_assoc();

if($rowemail["Email"]===$campoemail || $rownome["Nome"]===$camponome){
   header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=cadastrar.html");
 
  echo "
  <script>
  window.alert('Email ou nome já cadastrados')
  
  </script>
  ";  

    
}else{

$sql="INSERT INTO usuarios(nome,email,senha,acesso) values('$camponome','$campoemail','$camposenha','$campoacesso')";
if($conn->query($sql) === TRUE ){
	//Se o cadastro acontecer corretamente
	header("refresh:5;url=/index.php");
	echo "Gravado com sucesso";
	

	
}else{
	header("refresh:5;url=/index.php");
	echo "Error: ". $sql . "<br>" . $conn->error;
}}
$conn->close();
?>