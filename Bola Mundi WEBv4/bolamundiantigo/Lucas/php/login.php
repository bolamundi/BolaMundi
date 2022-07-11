<?php 

  

// Iniciando a Sessão 

session_start(); 

  

// Checando se um formulário foi enviado 

if (isset($_POST['senha'])){ 

  

// Parâmetros para criar a conexão 

$servername = "localhost"; 

$username = "id18524654_loginbm"; 

$password = "?j54wl8or}SWt2v^"; 

$dbname = "id18524654_loginbolamundi"; 

  

// Dados do Formulário 

$nome = $_POST["nome"]; 

$senha = $_POST["senha"]; 

  

// Criando a conexão 

$conn = new mysqli($servername, $username, $password, $dbname); 

  

// Checando a conexão 

if ($conn->connect_error) { 

  die("Connection failed: " . $conn->connect_error); 

} 

  

//Cria o SQL (consulte tudo na tabela usuarios com o nome digitado) 

$sql = "SELECT * FROM usuarios where nome='$nome'"; 

  

//Executa o SQL 

$result = $conn->query($sql); 

  

//Se a consulta tiver resultados 

if ($result->num_rows > 0) { 

     

    // Cria uma matriz com o resultado da consulta 

    $row = $result->fetch_assoc(); 

     

    //Verifica a senha 

    if($row["senha"] == $senha){ 

        $_SESSION['nome'] = $nome; 

        $_SESSION['senha'] = $senha; 

        header('Location: principal.php'); 

        exit; 

    }else{ 

        header("refresh:5; url = login.html"); 

        echo 'Erro no login'; 

        exit; 

    } 

//Se a consulta não tiver resultados     

} else { 

  header("refresh:5;url=index.html"); 

  echo 'Erro no login'; 

  exit;     

} 

  

$conn->close(); 

} else { 

    header ('Location: index.html'); // Rediciona para o form 

    exit; // Interrompe o script 

} 

?> 