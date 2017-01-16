<?php require_once("cabecalho.php");
 require_once("banco-cliente.php");

$cliente->id = $_POST["id"];
$cliente->nome = $_POST["nome"];
$cliente->email = $_POST["email"];
$cliente->endereco = $_POST["endereco"];
$cliente->rg = $_POST["rg"];
$cliente->cpf = $_POST["cpf"];
$cliente->contato = $_POST["contato"];
$cliente->nascimento = $_POST["nascimento"];
$cliente->observacao = $_POST["observacao"];
$cliente->categoriaCliente_id = $_POST['categoriaCliente_id'];



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
