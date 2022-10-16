<?php
session_start();
$idsel=$_SESSION['idsel'];
include_once("conexao.php");

if(isset($_SESSION['nome'])){
    $nome=$_SESSION['nome'];
    $recepcao=$_SESSION['nome'];
    $perfil=$_SESSION['perfil'];
   }else{
   $nome="Usuário não logado";
     $recepcao="";
   }

//Filtro de String
$msg = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_STRING);

//Pegando id do usuario e atribuindo a uma variavel
$query = "SELECT id FROM usuarios WHERE nome = '$nome'";

$result = mysqli_query($conn, $query);

$row = $result->fetch_assoc();

$idUsuario = $row['id'];

//Inserindo dados no banco
$sql = "INSERT INTO denuncia (id_usuario, nome, mensagem) value ('$idUsuario' , '$nome', '$msg')";

    if($nome=="Usuario não logado"){
        $_SESSION['msg'] = "Você precisa estar logado!";
        header("Location: /selecoes/selecao.php?id=$idsel&pag=1");

    }elseif(mysqli_query($conn, $sql)){
        $_SESSION['msg'] = "Sua denuncia foi enviada!"; 
        header("Location: /selecoes/selecao.php?id=$idsel&pag=1");
        
    } else {
        $_SESSION['msg'] = "Você precisa estar logado!"; 
        header("Location: /selecoes/selecao.php?id=$idsel&pag=1");
    }
    
    mysqli_close($conn);

?>