<?php 
      require_once("cabecalho.php");
      require_once("banco-produto.php");
      require_once("logica-usuario.php");
?>
<?php
$id = $_POST['id'];
removeProduto($conexao,$id);
$_SESSION["success"]= "Produto removido com sucesso";
header("Location: lista.php");
?>
<?php require_once("rodape.php");?>