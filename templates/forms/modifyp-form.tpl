{include file="header.tpl"}

<h2>Modificar producto</h2>
<form action="modify-product" method="POST">
    <input name="id" style="display:none;" type="text" value="{$id}">
    <p>Nombre del producto: <input name="nombre" type="text"></p>
    <p>Precio: <input name="precio" type="text"></p>
    <p>Descripcion: <input name="descripcion" type="text"></p>
    
    
    <p>Categoria:
    <select name="categoria">
    <option value="1">Gorras</option>
    <option value="2">Remeras</option>
    <option value="3">Pantalones</option>
    <option value="4">Zapatillas</option>
    </select>
    </p>
    
    <button type="submit">Modificar</button>
</form>