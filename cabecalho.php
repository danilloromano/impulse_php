<?php
error_reporting(E_ALL ^ E_NOTICE);
include("mostra-alerta.php");

?>

<html>
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">
    <link href="meucss/bootstrap.css" rel="stylesheet" />
    <link href="meucss/loja.css" rel="stylesheet" />
    <link href="meucss/lojaDois.css" rel="stylesheet" />
    <link href="meucss/resetCss.css" rel="stylesheet" />
    <link href="meucss/footer.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Creepster" rel="stylesheet">
    <script type="text/javascript "src="js/jquery.js"></script>
    <script type="text/javascript "src="js/maskedimput.min.js"></script>



</head>

<body>
   <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="imagens/ursoImpulse.jpg" id="urso-nav"></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="formulario-produto.php">Cadastro de Produtos</a></li>
      <li><a href="lista.php">Lista de Produtos</a></li>
      <li><a href="formulario-cliente.php">Cadastro de Clientes</a></li>
      <li><a href="lista-cliente.php">Lista de Clientes</a></li>
      <li><a href="logout.php">Deslogar</a></li>
    </ul>
  </div>
</nav>

    <div class="container">

    <div class="principal">
