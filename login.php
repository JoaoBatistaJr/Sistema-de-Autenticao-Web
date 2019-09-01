<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <meta charset='utf-8'>
 <title>Sistema Login</title>
 </head>
 <body>
  <h2>LOGIN</h2>
  <?php #VERIFICA SE A VARIAVEL EXISTE E EXIBE A MENSGEM
   if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
   }
  ?>
  <!--FORMULARIO DE LOGIN-->
  <form method="POST" action="valida.php">
  <label>Usuario: </label>
  <input type="text" name="usuario" placeholder="Digite seu usuario"><br><br>
  <label for="">Senha: </label>
  <input type="password" name="senha" placeholder="Digite sua senha"><br><br>
  <input type="submit" name="btnLogin" value="Entrar">

  <h4>Nao possui conta?</h4>
  <a href="cadastro.php">Cadastre-se</a>

  </form>
 </body>

</html>