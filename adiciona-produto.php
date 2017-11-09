<?php
require_once("cabecalho.php");
require_once("banco-produto.php");
require_once("logica-usuario.php");
require_once("class/Produto.php");
require_once("class/Categoria.php");

verificaUsuario();

$produto = new Produto();
$categoria = new Categoria();
$categoria->id = $_POST["categoria_id"];

$produto->nome = $_POST["nome"];
$produto->preco = $_POST["preco"];
$produto->descricao = $_POST["descricao"];
$produto->categoria = $categoria;
$produto->usado = array_key_exists("usado", $_POST) ? "true" : "false";

if(insereProduto($produto, $conexao)) { ?>
    <p class="text-success">Produto <?= $produto->nome; ?>, <?= $produto->preco; ?> adicionado com sucesso!</p>
<?php
} else {
    $msg = mysqli_error($conexao); ?>
    <p class="text-danger">O produto <? $produto->nome; ?> não foi adicionado: <?= $msg ?></p>
<?php
    } ?>

<?php include("rodape.php"); ?>