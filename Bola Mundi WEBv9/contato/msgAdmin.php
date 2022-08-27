<?php
session_start();
include_once("../conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mensagens</title>
</head>
<body>
    <h1>Mensagens Recebidas</h1>

    <form action="msgAdmin.php" method="GET">
    <select name="ordem" id="idordem">
        <option value="id ASC">data asc</option>
        <option value="id DESC">data des</option>
        <option value="email">email</option>
        <option value="nome">nome</option>
    </select>
    <input type="submit" value="Ordenar">
    </form>

    <br>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    //Ordenação das mensagens
    $ordenac = $_GET["ordem"];

    if($ordenac=="id ASC" || $ordenac=="id DESC" || $ordenac=="email" || $ordenac=="nome"){
        $ordenac;
    }else{
        $ordenac = "id ASC";
    }

    //Receber numero da pagina
    $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);

    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

    //Setar itens por pagina
    $qnt_result_pg = 10;

    //Calcular o inicio da visualização
    $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

    $result_contato = "SELECT * FROM contato ORDER BY $ordenac LIMIT $inicio, $qnt_result_pg";
    
    $resultado_contato = mysqli_query($conn, $result_contato);

    while($row_mensagem = mysqli_fetch_assoc($resultado_contato)){
        echo "<div><p class='nome'>Id: " . $row_mensagem['id'] . "<p> ";
        echo "<p class='nome'>Nome: " . $row_mensagem['nome'] . "<p> ";
        echo "<p class='email'>Email: " . $row_mensagem['email'] . "<p>";
        echo "<p class='assunto'>Assunto: " . $row_mensagem['assunto'] . "<p>";
        echo "<p class='mensagem'>" . $row_mensagem['conteudo'] . "<p></div> <hr>";
    }

    //Paginação
    $result_pg = "SELECT COUNT(id) AS num_result FROM contato";

    $resultado_pg = mysqli_query($conn, $result_pg);

    $row_pg = mysqli_fetch_assoc($resultado_pg);

    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

    //Limitar links

    $max_links = 2;


    //Links de paginas


    echo "<a href='msgAdmin.php?pagina=1&ordem=$ordenac'>&le; </a> ";
    
    for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
        
        if($pag_ant >= 1){
        echo "<a href='msgAdmin.php?pagina=$pag_ant&ordem=$ordenac'>$pag_ant </a> ";
        }
    }

    echo "<a>$pagina </a>";
    
    for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
        if($pag_dep <= $quantidade_pg){
            echo "<a href='msgAdmin.php?pagina=$pag_dep&ordem=$ordenac'>$pag_dep </a> ";

        }
    }

    echo "<a href='msgAdmin.php?pagina=$quantidade_pg&ordem=$ordenac'>&ge; </a> ";

    ?>
    
</body>
</html>