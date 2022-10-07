{include file="header.tpl"}

<h3> Todos los productos: </h3>

<p><a href="form-add-product">Añadir producto</p>

<ul class="list-group">
    {foreach from=$products item=$product}
        <li class="list-group-item"><a href="producto/{$product->id_producto}">{$product->nombre}</a>  <a class="btn btn-danger btn-sm" href="delete-product/{$product->id_producto}"><p>Eliminar</p></a></li>        
    {/foreach}
</ul>

{include file="footer.tpl"}