{include file="header.tpl"}

<ul class="list-group">
    {foreach from=$products[1] item=$category}
        <li class="sub-title-text" class="list-group-item">{$category->nombre}     
    {/foreach}

    {foreach from=$products[0] item=$product}
        <li class="list-group-item">
        <a href="producto/{$product->id_producto}">{$product->nombre}</a> 
        <a class="btn btn-danger btn-sm" href="delete-category/{$product->id_producto}"><i class="fa-solid fa-trash"></i></a>
        </li>        
    {/foreach}
</ul>

{include file="footer.tpl"}

