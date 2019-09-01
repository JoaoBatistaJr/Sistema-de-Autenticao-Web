<?php
session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
 include_once 'conexao.php';
 $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
 //var_dump($dados);
 password_hash($dados['senha'], PASSWORD_DEFAULT);

 $result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES (
          '".$dados['nome']."',
          '".$dados['email']."',
          '".$dados['usuario']."',
          '".$dados['senha']."'
          )";
  $resultado_usuario = mysqli_query($conn, $result_usuario);
  if(mysqli_insert_id($conn)){
   $_SESSION['msg'] = "Usuario cadastrado com sucesso!";
   header("Location login.php");
  }else{
   $_SESSION['msg'] = "Erro no cadastro de usuraio";
  }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <meta charset='utf-8'>
 <title>Sistema Cadastro</title>
 </head>
 <body>
  <h2>CADASTRO DE USUARIO</h2>
  <?php #VERIFICA SE A VARIAVEL EXISTE E EXIBE A MENSGEM
   if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
   }
  ?>
  <!--FORMULARIO DE CADASTRO DE USUARIO-->
  <form method="POST" action="">
  <label>Nome: </label>
  <input type="text" name="nome" placeholder="Digite seu nome e sobrenome"><br><br>

  <label for="">Email: </label>
  <input type="text" name="email" placeholder="Digite seu email"><br><br>

  <label for="">Usuario: </label>
  <input type="text" name="usuario" placeholder="Digite seu usuario"><br><br>

  <label for="">Senha: </label>
  <input type="passowrd" name="senha" placeholder="Digite sua senha"><br><br>

  <input type="submit" name="btnCadUsuario" value="Cadastrar"><br><br>
  <a href="login.php"">Voltar</a>

  </form>
 </body>

</html>