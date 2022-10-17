{include file="header.tpl"}

<div class="content">
    <h2>Añadir producto</h2>
    <form action="add-product" method="POST" enctype="multipart/form-data">
        <p>Nombre del producto: <input name="nombre" required type="text"></p>
        <p>Precio: <input name="precio" required type="text"></p>
        <p>Descripcion: <input name="descripcion" required type="text"></p>
        
        {$count = 1}
        <p>Categoria:
        <select name="categoria" required>
            {foreach from=$categories item=$category}
                <option value="{$count}">{$category->nombre}</option>
                {$count = $count+1}
            {/foreach}
        </select>
        </p>

        <p>Imagen del producto:
        <input type="file" name="img"> 
        </p>
        
        <button type="submit" class="btn btn-success">Añadir</button>
    </form>
</div>


{*
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
                <option value="{$count}">{$category->nombre}</option>
                {$count = $count+1}
            {/foreach}
        </select>
        </p>
        
        <button type="submit" class="btn btn-success">Añadir</button>
    </form>
</div>
*}