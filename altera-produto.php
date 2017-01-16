<?php require_once("cabecalho.php");
 require_once("banco-produto.php");

$produto->id = $_POST["id"];
$produto->nome = $_POST["nome"];
$produto->data = $_POST["data"];
$produto->marca = $_POST["marca"];
$produto->custo = $_POST["custo"];
$produto->venda = $_POST["venda"];
$produto->validade = $_POST["validade"];
$produto->quantidade = $_POST["quantidade"];
$produto->lucro = ($_POST["venda"] - $_POST["custo"]) * $_POST["quantidade"];
$produto->descricao = $_POST["descricao"];
$produto->categoria_id = $_POST["categoria_id"];


if(alteraProduto($conexao,$produto)) { ?>
    <p class="text-success" id="mensagem">O produto <?=$produto->nome ?>, <?= $produto->custo ?> foi alterado.</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">O produto <?= $produto->nome ?> não foi alterado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>
