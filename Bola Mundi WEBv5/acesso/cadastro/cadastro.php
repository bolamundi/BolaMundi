<?php



$camponome=filter_input(INPUT_POST, "nome");
$campoemail=filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$camposenha=filter_input(INPUT_POST, "senha");
$campoacesso='Usuario';
$dataobj= new DateTime();
$formato = 'Y-m-d';
$datacadastro = $dataobj->format($formato) ;

    
$hashsenha= password_hash($camposenha, PASSWORD_BCRYPT);


require 'C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\conexao.php';

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

$sql="INSERT INTO usuarios(nome,email,senha,acesso,Status,Data) values('$camponome','$campoemail','$hashsenha','$campoacesso','Ativo','$datacadastro')";
if($conn->query($sql) === TRUE ){
	//Se o cadastro acontecer corretamente
	header("refresh:0.000000000000000000000000000000000001;url=/index.php");
	echo "<script>window.alert('Gravado com sucesso')</script>";
	

	
}else{
	header("refresh:5;url=/index.php");
	echo "Error: ". $sql . "<br>" . $conn->error;
}}
$conn->close();
?>