{include file="header.tpl"}

<div class="form-div">
    <h2>Añadir categoria</h2>
    <form action="add-category" method="POST">

        <p>Nombre de la categoria: <input name="nombre" type="text"></p>
        <p>Descripcion: <input name="descripcion" type="text"></p>
        
        <button type="submit" class="btn btn-success">Añadir</button>
    </form>
</div>