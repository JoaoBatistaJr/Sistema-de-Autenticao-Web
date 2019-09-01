<?php
session_start();
if(!empty($_SESSION['id'])){
 echo "Olá ".$_SESSION['nome'] .", BEM VINDO! <br>";
 echo "<a href='Sair.php'> Sair</a>";
}else{
 $_SESSION['msg'] = "ACESSO NEGADO";
 header("Location: login.php");
}
?>