<?php
require_once("classCliente.php");
require_once("conecta.php");

function insereUsers($conexao,Cliente $cliente){
$name = mysqli_real_escape_string($conexao,$cliente->name);
$endereco = mysqli_real_escape_string($conexao,$cliente->endereco);
$email = mysqli_real_escape_string($conexao,$cliente->email);
$observacao = mysqli_real_escape_string($conexao,$cliente->observacao);
$query = "insert into users (name,email,rg,cpf,phone,user_role,birth) values ('{$cliente->name}','{$cliente->endereco}','{$cliente->email}','{$cliente->rg}','{$cliente->cpf}','{$cliente->phone}',{$cliente->user_role},'{$cliente->observacao}','{$cliente->birth}')";
return  mysqli_query($conexao, $query);
}

function removeUsers($conexao,$id) {
    $query = "delete from users where id = {$id}";
    return mysqli_query($conexao, $query);
}

function buscaUsers($conexao, $id) {
    $query = "select * from users where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}


function alteraUsers($conexao, Cliente $cliente) {
    $query = "update users set user_role = {$cliente->user_role},name = '{$cliente->name}', endereco = '{$cliente->endereco}',
    email = '{$cliente->email}',rg = '{$cliente->rg}',cpf = '{$cliente->cpf}',
    phone = '{$cliente->phone}',
    observacao='{$cliente->observacao}',birth= '{$cliente->birth}' where id = '{$cliente->id}'";
    return mysqli_query($conexao, $query);
}

function listaUsers($conexao) {
    $users = array();
    $resultado = mysqli_query($conexao, "select cl.*, c.name as roles from users as cl join roles as c on cl.user_role = c.id");
    while($user = mysqli_fetch_assoc($resultado)) {
        array_push($users, $user);
    }

    return $users;

}
