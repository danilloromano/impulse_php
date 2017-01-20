<?php require_once("cabecalho.php");
 require_once("banco-cliente.php");

$cliente->id = $_POST["id"];
$cliente->nome = $_POST["nome"];
$cliente->email = $_POST["email"];
$cliente->endereco = $_POST["endereco"];
$cliente->rg = $_POST["rg"];
$cliente->cpf = $_POST["cpf"];
$cliente->phone = $_POST["phone"];
$cliente->birth = $_POST["birth"];
$cliente->observacao = $_POST["observacao"];
$cliente->user_role = $_POST['user_role'];



if(alteraCliente($conexao,$cliente)) { ?>
    <p id="mensagem" class="text-success">O Cliente <?=$cliente->nome ?> ,foi alterado.</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p id="mensagem" class="text-danger">O Cliente <?= $cliente->nome ?> não foi alterado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>
