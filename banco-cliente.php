<?php
require_once("classCliente.php");
require_once("conecta.php");

function insereCliente($conexao,Cliente $cliente){
$nome = mysqli_real_escape_string($conexao,$cliente->nome);
$endereco = mysqli_real_escape_string($conexao,$cliente->endereco);
$email = mysqli_real_escape_string($conexao,$cliente->email);
$observacao = mysqli_real_escape_string($conexao,$cliente->observacao);
$query = "insert into clientes (nome,endereco,email,rg,cpf,contato,categoriaCliente_id,observacao,nascimento) values ('{$cliente->nome}','{$cliente->endereco}','{$cliente->email}','{$cliente->rg}','{$cliente->cpf}','{$cliente->contato}',{$cliente->categoriaCliente_id},'{$cliente->observacao}','{$cliente->nascimento}')";
return  mysqli_query($conexao, $query);
}

function removeCliente($conexao,$id) {
    $query = "delete from clientes where id = {$id}";
    return mysqli_query($conexao, $query);
}

function buscaCliente($conexao, $id) {
    $query = "select * from clientes where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}


function alteraCliente($conexao, Cliente $cliente) {
    $query = "update clientes set categoriaCliente_id = {$cliente->categoriaCliente_id},nome = '{$cliente->nome}', endereco = '{$cliente->endereco}',
    email = '{$cliente->email}',rg = '{$cliente->rg}',cpf = '{$cliente->cpf}',
    contato = '{$cliente->contato}',
    observacao='{$cliente->observacao}',nascimento= '{$cliente->nascimento}' where id = '{$cliente->id}'";
    return mysqli_query($conexao, $query);
}

function listaClientes($conexao) {
    $clientes = array();
    $resultado = mysqli_query($conexao, "select cl.*, c.nome as categoriasCliente_nome from clientes as cl join categoriasCliente as c on cl.categoriaCliente_id = c.id");
    while($cliente = mysqli_fetch_assoc($resultado)) {
        array_push($clientes, $cliente);
    }

    return $clientes;

}
