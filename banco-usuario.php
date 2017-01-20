<?php
require_once("conecta.php");
function buscaUsers($conexao, $email, $password) {
    $senhaMd5 = md5($password);
    $email = mysqli_real_escape_string($conexao, $email);
    $query = "select * from users where email='{$email}' and password='{$senhaMd5 }'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}
