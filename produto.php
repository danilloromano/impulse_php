<?php
require_once("cabecalho.php");
require_once("classProduto.php");
require_once("banco-produto.php");

$produto->data = $_POST["data"];
$produto->nome = $_POST["nome"];
$produto->marca = $_POST["marca"];
$produto->custo = $_POST["custo"];
$produto->venda = $_POST["venda"];
$produto->validade = $_POST["validade"];
$produto->quantidade = $_POST["quantidade"];
$produto->lucro = ($_POST["venda"] - $_POST["custo"]) * $_POST["quantidade"];
$produto->descricao = $_POST["descricao"];
$produto->categoria_id = $_POST['categoria_id'];


      if(insereProduto($conexao,$produto)) { ?>
      <p id="mensagem" class = "text-success">Produto <?= $produto->nome ?> cadastrado com sucesso</p>
    <?php  } else {
      $msg = mysqli_error($conexao);
      ?>
      <p id="mensagem" class = "text-danger">Produto <?= $produto->nome; ?> nao foi adicionado,<?= $msg ?> </p>
      <?php
      }
      ?>

<?php require_once("rodape.php");?>
