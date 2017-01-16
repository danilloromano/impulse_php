<?php
require_once("conecta.php");
function listaCategoriasCliente($conexao){
$categoriasClientes = array();
$query = "select * from categoriasCliente";
$resultado = mysqli_query($conexao,$query);
while($categoriaCliente = mysqli_fetch_assoc($resultado)) {
    array_push($categoriasClientes, $categoriaCliente);

    }
        return $categoriasClientes;
}
