foreach($products as $producto){
    
    <a href="producto/'.$producto->id_producto.'">

    <h4>'.$producto->nombre.'</h4></a>';
    
    <a href="delete-product/'.$producto->id_producto.'"><p>Eliminar</p>
   
}
    <a href="home"><p>Inicio</p>;