{include file="header.tpl"}


<div class="content">
    <ul class="list-group">

        {foreach from=$products[1] item=$category}
            <li class="normal-text" class="sub-title-text" class="list-group-item"> <h3 class="sub-title-text"> {$category->nombre} : </h3>   
        {/foreach}

        {foreach from=$products[0] item=$product}
            <li class="normal-text" class="list-group-item">
                <a href="producto/{$product->id_producto}">{$product->nombre}</a> 

                {if isset($smarty.session.IS_LOGGED)}
                    <a class="btn btn-danger btn-sm" href="delete-category/{$product->id_producto}"><i class="fa-solid fa-trash"></i></a>
                {/if}
            </li>        
        {/foreach}
    </ul>
</div>

{include file="footer.tpl"}

