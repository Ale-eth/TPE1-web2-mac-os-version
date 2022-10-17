{include file="header.tpl"}

<div class="content">
    <h2>Añadir categoria</h2>
    <form action="add-category" method="POST">

        <p>Nombre de la categoria: <input name="nombre" required type="text"></p>
        <p>Descripcion: <input name="descripcion" required type="text"></p>
        
        <button type="submit" class="btn btn-success">Añadir</button>
    </form>
</div>