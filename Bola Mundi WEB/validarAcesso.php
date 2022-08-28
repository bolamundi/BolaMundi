<?php

if( isset($_SESSION['acesso']) and $_SESSION['acesso']=="Admin"){
    
    
} else if($path==2){
    header('Location: ../../index.php'); //Redireciona para o form
    exit; // Interrompe o Script
}else {
       header('Location: ../../index.php'); //Redireciona para o form
    exit; // Interrompe o Script
    
}

?>