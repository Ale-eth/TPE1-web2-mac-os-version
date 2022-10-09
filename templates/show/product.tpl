{include file="header.tpl"}

<ul class="list-group">
    {foreach from=$product[0] item=$productprop}
        <li class="list-group-item">
        <h3>Nombre del producto: </h3>{$productprop->nombre}
        <h3>Precio: </h3>{$productprop->precio}$
        <h3>Descripcion del producto: </h3>{$productprop->descripcion}
        </br>
        <a class="btn btn-warning" href="form-modify-product/{$productprop->id_producto}"><i class="fa-solid fa-pen-to-square"></i></a>
        <a class="btn btn-danger btn-sm" href="delete-product/{$productprop->id_producto}"><i class="fa-solid fa-trash"></i></a>
        </li>        
    {/foreach}
</ul>

{include file="footer.tpl"}



