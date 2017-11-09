<?php
require_once("conecta.php");
require_once("class/Categoria.php");

function listaCategorias($conexao) {
    $categorias = array();
    $query = "select * from categorias";

    $resultado = mysqli_query($conexao, $query);

    while($c = mysqli_fetch_assoc($resultado)) {   
        $categoria = new Categoria();
        $categoria->id = $c["id"];
        $categoria->nome = $c["nome"];
        array_push($categorias, $categoria); 
    }

    return $categorias;
}