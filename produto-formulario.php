<?php 
require_once("cabecalho.php"); 
require_once("banco-categoria.php"); 
require_once("logica-usuario.php");
require_once("class/Produto.php");

verificaUsuario();

$categoria = new Categoria();
$categoria->id = 1;
$produto = new Produto();
$produto->categoria = $categoria;

$categorias = listaCategorias($conexao);
?>

<h1>Formulário de cadastro</h1>
<form action="adiciona-produto.php" method="post">
    <table class="table">
        <?php include("produto-formulario-base.php"); ?>
        <tr>
            <td></td>
            <td><input type="submit" value="Cadastrar" class="btn btn-primary" /></td>
        </tr>
    </table>
</form>

<?php include("rodape.php"); ?>
