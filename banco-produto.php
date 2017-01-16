<?php
require_once("classProduto.php");
require_once("conecta.php");

function insereProduto($conexao,Produto $produto){
$nome = mysqli_real_escape_string($conexao,$produto->nome);
$marca = mysqli_real_escape_string($conexao,$produto->marca);
$descricao = mysqli_real_escape_string($conexao,$produto->descricao);
$query = "insert into produtos (nome,marca,custo,venda,validade,categoria_id,descricao,quantidade,lucro,data) values ('{$produto->nome}','{$produto->marca}',{$produto->custo},{$produto->venda},'{$produto->validade}',{$produto->categoria_id},'{$produto->descricao}',{$produto->quantidade},{$produto->lucro},'{$produto->data}')";
return  mysqli_query($conexao, $query);
}

function removeProduto($conexao,$id) {
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id) {
    $query = "select * from produtos where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function alteraProduto($conexao, Produto $produto) {
    $query = "update produtos set nome = '{$produto->nome}',marca = '{$produto->marca}',data = '{$produto->data}',
    custo = {$produto->custo},venda = {$produto->venda},validade = '{$produto->validade}',
    descricao = '{$produto->descricao}',
    quantidade = {$produto->quantidade},lucro={$produto->lucro},
    categoria_id= {$produto->categoria_id} where id = '{$produto->id}'";
    return mysqli_query($conexao, $query);
}

function listaProdutos($conexao) {
    $produtos = array();
    $resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id = c.id");

    while($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }

    return $produtos;

}
