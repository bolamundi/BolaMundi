<?php
  session_start();
  $_SESSION['deslogar']=true;
  unset($_SESSION['acesso']);
  unset($_SESSION['nome']);
  unset($_SESSION['senha']);
  header('location:/index.php');
?>