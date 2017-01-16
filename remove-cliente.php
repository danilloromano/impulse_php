<?php
      require_once("cabecalho.php");
      require_once("banco-cliente.php");
      require_once("logica-usuario.php");
?>
<?php
$id = $_POST['id'];
removeCliente($conexao,$id);
$_SESSION["success"]= "Produto removido com sucesso";
header("Location: lista-cliente.php");
?>
<?php require_once("rodape.php");?>
