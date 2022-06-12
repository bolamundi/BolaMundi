<?php
session_start();
if (isset($_POST['senha'])){
// Dados do Formulário
$campoemail = $_POST["email"];
$camposenha = $_POST["senha"];

//Faz a conexão com o BD.
require 'conexao.php';

//Cria o SQL (consulte tudo na tabela usuarios com o email digitado no form)
$sql = "SELECT * FROM usuarios where email='$campoemail'";

//Executa o SQL
$result = $conn->query($sql);

// Cria uma matriz com o resultado da consulta
 $row = $result->fetch_assoc();
$resultado=password_verify($camposenha,$row["Senha"]);

        if($resultado and $row["Status"]=="Ativo"){
            $_SESSION["nome"]=$row['Nome'];
			$_SESSION['email'] = $row["Email"];
			$_SESSION['acesso'] = $row["Acesso"];
            header('Location: /index.php');
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