<?php
error_reporting(E_ALL ^ E_NOTICE);
include("mostra-alerta.php");

?>

<html>
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Creepster" rel="stylesheet">
    <link href="meucss/bootstrap.min.css" rel="stylesheet" />
    <link href="meucss/loja.css" rel="stylesheet" />
    <link href="meucss/loja2.css" rel="stylesheet" />
    <link href="meucss/nav.css" rel="stylesheet" />
    <link href="meucss/resetCss.css" rel="stylesheet" />
    <link href="meucss/rodape.css" rel="stylesheet" />
    <link href="meucss/jquery.dataTables.css" rel="stylesheet" />
      <script type="text/javascript "src="js/jquery.js"></script>
      <script src="js/jquery.dataTables.js" type="text/javascript"></script>
      <script type="text/javascript "src="js/maskedimput.min.js"></script>

      <script>
      $(document).ready(function () {
        console.log('caceta de negro', $('#datatables'));
                $('#tabela').dataTable();
              });
      </script>

</head>

<body>
   <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="imagens/ursoImpulse.jpg" id="urso-nav"></a>
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
