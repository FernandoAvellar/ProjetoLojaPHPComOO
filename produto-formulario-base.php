<tr>
    <td>Nome</td>
    <td><input type="text" class="form-control" name="nome" value="<?=$produto->nome?>" /></td>
</tr>
<tr>
    <td>Preço</td>
    <td><input type="number" class="form-control" name="preco" value="<?=$produto->preco?>" /></td>
</tr>
<tr>
    <td>Descrição</td>
    <td><textarea name="descricao" class="form-control"><?=$produto->descricao?></textarea></td>
</tr>

<?php
    $usado = $produto->usado ? "checked='checked'" : "";
?>

<tr>
    <td></td>
    <td><input type="checkbox" name="usado" value="true" <?=$produto->usado?>> Usado</td>
</tr>
<tr>
    <td>Categoria</td>
    <td>
        <select name="categoria_id" class="form-control">
            <?php foreach($categorias as $categoria) : 
                $essaEhACategoria = $produto->categoria_id == $categoria->id;
                $selecao = $essaEhACategoria ? "selected='selected'" : "";?>
                <option value="<?=$categoria->id?>" <?=$selecao?>> <?=$categoria->nome?></option>
            <?php endforeach ?>
        </select>
    </td>
</tr>