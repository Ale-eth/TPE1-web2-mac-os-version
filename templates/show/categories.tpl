{include file="header.tpl"}

<h3 class="sub-title-text"> Categorias: </h3>

<ul class="list-group">
    {foreach from=$categories item=$category}
        <li class="list-group-item">
        <a href="categorias/{$category->id_categoria}">{$category->nombre}</a> 
        <a class="btn btn-danger btn-sm" href="delete-category/{$category->id_categoria}"><i class="fa-solid fa-trash"></i></a>
        <a class="btn btn-warning btn-sm" href="form-modify-category/{$category->id_categoria}"><i class="fa-solid fa-pen-to-square"></i></a>
        </li>  
    {/foreach}

    <li class="list-group-item">
    <a class="btn btn-success" href="form-add-category"> <i class="fa-solid fa-plus"></i></a>
     
    </li>  
</ul>



{include file="footer.tpl"}
