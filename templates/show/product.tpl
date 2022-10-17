{include file="header.tpl"}


<div class="content">
    <ul class="list-group">
        {foreach from=$product[0] item=$productprop}
            <li class="normal-text" class="list-group-item">
                <h3 class="sub-title-text">Nombre del producto: </h3>{$productprop->nombre}
                <h3 class="sub-title-text">Precio: </h3>{$productprop->precio}$
                <h3 class="sub-title-text">Descripcion del producto: </h3>{$productprop->descripcion}
                </br>

                {if isset($smarty.session.IS_LOGGED)}
                    <a class="btn btn-warning" href="form-modify-product/{$productprop->id_producto}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a class="btn btn-danger btn-sm" href="delete-product/{$productprop->id_producto}"><i class="fa-solid fa-trash"></i></a>
                {/if}
            </li>        
        {/foreach}
    </ul>
</div>

{include file="footer.tpl"}



