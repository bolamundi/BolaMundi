<?php


$retorno='esqueceuSenhaform.php?cod=1';

$email=filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$codigo=filter_input(INPUT_POST, "codigo");
$senha=filter_input(INPUT_POST, "senha");
$hashsenha= password_hash($senha, PASSWORD_BCRYPT);

$camponome='Usuário';
require '../../conexao.php';

if (isset($codigo) and isset($senha)){
$sqlVerificarCod="SELECT * FROM usuarios WHERE CodigoSenha='$codigo'";
$resVerificarCod=$conn->query($sqlVerificarCod);
if ($resVerificarCod->num_rows > 0){
    $sqlTrocarSenha="UPDATE usuarios SET Senha='$hashsenha' WHERE CodigoSenha='$codigo'";
    if ($conn->query($sqlTrocarSenha)){
     header( "refresh:0.0000000000000000000000000000000000000000000000000000001;url=../login/login.html" );
          echo "
          <script>
          window.alert('Alteração bem sucedida')

          
          </script>";
        
    }else{
        header( "refresh:0.0000000000000000000000000000000000000000000000000000001;url=esqueceuSenhaform.php?cod=1" );
          echo "
          <script>
          window.alert('Erro ao fazer alteração')

          
          </script>";
        
    }
    
}else{
    
    
    header( "refresh:0.0000000000000000000000000000000000000000000000000000001;url=esqueceuSenhaform.php?cod=1" );
          echo "
          <script>
          window.alert('Código incorreto')

          
          </script>
          
          
          "; 
}
    
    
}else{
$sqlVerificarEmail="SELECT * FROM usuarios WHERE Email='$email'";
$resVerificarEmail=$conn->query($sqlVerificarEmail);
if ($resVerificarEmail->num_rows > 0){
    $rowUsuario=$resVerificarEmail->fetch_assoc();
    $idUsuario=$rowUsuario['Id'];
include 'gerarCodigo.php';
    
    if($conn->query($sqlCadastrarCodigo)){
        
    require 'enviaremail.php';  

//Conteúdo do email de validação
$texto = "Eaí, campeão!!!<br> <br> Seu código é ". $validador .", digite ele no campo indicado para alterar a sua senha.<br>
" ;

enviaremail($camponome, $email, 'Esqueci minha senha', $texto,$retorno);

}else{
       header( "refresh:0.0000000000000000000000000000000000000000000000000000001;url=esqueceuSenhaform.php" );
          echo "
          <script>
          window.alert('Erro ao adicionar o validador')

          
          </script>
          
          
          ";  
    
}
}else{
   header( "refresh:0.0000000000000000000000000000000000000000000000000000001;url=esqueceuSenhaform.php" );
          echo "
          <script>
          window.alert('E-mail inexistente')

          
          </script>
          
          
          ";  
}}

?>