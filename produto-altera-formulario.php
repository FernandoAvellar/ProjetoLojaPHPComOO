<?php 
require_once("cabecalho.php"); 
require_once("banco-categoria.php"); 
require_once("banco-produto.php"); 
require_once("class/Produto.php");

$id = $_GET["id"];
$produto = buscaProduto($id, $conexao);
$categorias = listaCategorias($conexao);
$selecao_usado = $produto->usado ? "checked='checked'" : "";
$produto->usado = $selecao_usado;
?>

<h1>Alterando cadastro</h1>
<form action="altera-produto.php" method="post">
    <table class="table">
    <input type="hidden" name="id" value="<?=$produto->id?>">
    <?php include("produto-formulario-base.php"); ?>  
        <tr>
            <td></td>
            <td><input type="submit" value="Alterar" class="btn btn-primary" /></td>
        </tr>
    </table>
</form>

<?php include("rodape.php"); ?>
