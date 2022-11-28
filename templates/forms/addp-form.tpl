{include file="header.tpl"}

<div class="content">
    <h2>Añadir producto</h2>
    <form action="add-product" method="POST">
        <p>Nombre del producto: <input name="nombre" required type="text"></p>
        <p>Precio: <input name="precio" required type="text"></p>
        <p>Descripcion: <input name="descripcion" required type="text"></p>
        
        {$count = 1}
        <p>Categoria:
        <select name="categoria" required>
            {foreach from=$categories item=$category}
                <option value="{$category->id_categoria}">{$category->nombre}</option>
            {/foreach}
        </select>
        </p>
        
        <button type="submit" class="btn btn-success">Añadir</button>
    </form>
</div>
