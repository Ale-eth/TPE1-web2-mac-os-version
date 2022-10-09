{include file="header.tpl"}

<div class="form">
<h2>Modificar categoria</h2>
<form action="modify-category" method="POST">
    <input name="id" style="display:none;" type="text" value="{$id}">
    <p>Nombre de la categoria: <input name="nombre" type="text"></p>
    <p>Descripcion: <input name="descripcion" type="text"></p>

    <button type="submit">Modificar</button>
</form>
</div>