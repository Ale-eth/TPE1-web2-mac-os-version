{include file="header.tpl"}


<div class="content">

<h3 class="sub-title-text"> Todos los productos: </h3>
<ul class="list-group">
    {foreach from=$products item=$product}
        <li class="normal-text" class="list-group-item">
            <a href="producto/{$product->id_producto}">{$product->nombre}</a>
        
        {if isset($smarty.session.IS_LOGGED)}
            <a class="btn btn-danger btn-sm" href="delete-product/{$product->id_producto}">
            <i class="fa-solid fa-trash"></i></a>
        {/if}
        </li>        
    {/foreach}
</ul>

{if isset($smarty.session.IS_LOGGED)}
<a class="btn btn-success" href="form-add-product"> <i class="fa-solid fa-plus"></i> </a>
{/if}

</div>

{include file="footer.tpl"}











