<?php
require_once("cabecalho.php");
require_once("classCliente.php");
require_once("banco-cliente.php");


$cliente->nome = $_POST["nome"];
$cliente->email = $_POST["email"];
$cliente->endereco = $_POST["endereco"];
$cliente->rg = $_POST["rg"];
$cliente->cpf = $_POST["cpf"];
$cliente->phone = $_POST["phone"];
$cliente->birth = $_POST["birth"];
$cliente->observacao = $_POST["observacao"];
$cliente->user_role = $_POST['user_role'];


      if(insereCliente($conexao,$cliente)) { ?>
      <p id="mensagem" class = "text-success">Cliente <?= $cliente->nome ?>  cadastrado com sucesso</p>
    <?php  } else {
      $msg = mysqli_error($conexao);
      ?>
      <p id="mensagem" class = "text-danger">Cliente <?= $cliente->nome; ?>   nao foi adicionado,<?= $msg ?> </p>
      <?php
      }
      ?>

<?php require_once("rodape.php");?>
