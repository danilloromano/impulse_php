<?php
require_once ("banco-usuario.php");
require_once("logica-usuario.php");

$usuario = buscaUsers($conexao, $_POST["email"], $_POST["password"]);
if($usuario == null) {
    $_SESSION["danger"]= "Usuario ou senha invalida";
    header("Location: index.php");
} else {
    $_SESSION["success"]= "Usuario logado com sucesso";
    logaUsuario($usuario["email"]);
    header("Location: index.php");
}
die();
