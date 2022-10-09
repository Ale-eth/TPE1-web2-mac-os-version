{include file="header.tpl"}

<div class="form-div">
    <h2>Añadir producto</h2>
    <form action="add-product" method="POST">
        <p>Nombre del producto: <input name="nombre" type="text"></p>
        <p>Precio: <input name="precio" type="text"></p>
        <p>Descripcion: <input name="descripcion" type="text"></p>
        
        {$count = 1}
        <p>Categoria:
        <select name="categoria">
            {foreach from=$categories item=$category}
                <option value="{$count}">{$category->nombre}</option>
                {$count = $count+1}
            {/foreach}
        </select>
        </p>
        
        <button type="submit" class="btn btn-success">Añadir</button>
    </form>
</div>