<?php
require_once("cabecalho.php");
require_once("classCliente.php");
require_once("banco-cliente.php");


$cliente->nome = $_POST["nome"];
$cliente->email = $_POST["email"];
$cliente->endereco = $_POST["endereco"];
$cliente->rg = $_POST["rg"];
$cliente->cpf = $_POST["cpf"];
$cliente->contato = $_POST["contato"];
$cliente->nascimento = $_POST["nascimento"];
$cliente->observacao = $_POST["observacao"];
$cliente->categoriaCliente_id = $_POST['categoriaCliente_id'];


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
