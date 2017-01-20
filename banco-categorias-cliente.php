<?php
require_once("conecta.php");
function listaCategoriasCliente($conexao){
$roles = array();
$query = "select * from roles";
$resultado = mysqli_query($conexao,$query);
while($role = mysqli_fetch_assoc($resultado)) {
    array_push($roles, $role);

    }
        return $roles;
}
