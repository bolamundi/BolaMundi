<?php
session_start();
if (isset($_POST['senha'])){
// Dados do Formulário
$campoemail = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$camposenha = filter_input(INPUT_POST, "senha");

//Faz a conexão com o BD.
require '../../conexao.php';


//Cria o SQL (consulte tudo na tabela usuarios com o email digitado no form)
$sql = "SELECT * FROM usuarios where email='$campoemail'";

//Executa o SQL
$result = $conn->query($sql);

// Cria uma matriz com o resultado da consulta
 $row = $result->fetch_assoc();
$resultado=password_verify($camposenha,$row["Senha"]);
//$resultado=true;
        if($resultado and $row["Status"]=="Ativo"){
            $_SESSION["Id_usuario"]=$row['Id'];
            $_SESSION["nome"]=$row['Nome'];
			$_SESSION['email'] = $row["Email"];
			$_SESSION['acesso'] = $row["Acesso"];
			$_SESSION['idusuario'] = $row["Id"];
			$_SESSION['moeda'] = $row["Saldo"];
			$_SESSION['xp'] = $row["Xp"];
			$_SESSION['nivel'] = $row["Nivel"];
			$_SESSION['pais'] = $row["Pais"];
			$_SESSION['rank'] = $row["Rank"];
			$_SESSION['data'] = $row["Data"];
			$_SESSION['perfil']=$row['Perfil'];
			$_SESSION['paisTorcedor']=$row['PaisTorcedor'];
            header('Location: ../../../pt-br/index.php');
            exit;
        }else{
           header( "refresh:0.0000000000000000000000000000000000000000000000000000001;url=login.html" );
          echo "
          <script>
          window.alert('Login incorreto ou usuário inexistente')

          
          </script>
          
          
          ";
        }
} else {
    header('Location: login.html'); //Redireciona para o form
    exit; // Interrompe o Script
}
?> 