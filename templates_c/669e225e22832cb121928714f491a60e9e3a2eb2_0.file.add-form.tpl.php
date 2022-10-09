<?php
/* Smarty version 4.1.0, created on 2022-10-09 01:37:34
  from '/Users/louufresco/Sites/localhost/tpe/templates/add-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_634225de960a22_31728393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '669e225e22832cb121928714f491a60e9e3a2eb2' => 
    array (
      0 => '/Users/louufresco/Sites/localhost/tpe/templates/add-form.tpl',
      1 => 1665277035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634225de960a22_31728393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Añadir producto</h2>
<form action="add-product" method="POST">
    <p>Nombre del producto: <input name="nombre" type="text"></p>
    <p>Precio: <input name="precio" type="text"></p>
    <p>Descripcion: <input name="descripcion" type="text"></p>
    
    
    <p>Categoria:
    <select name="categoria">
    <option value="1">Gorras</option>
    <option value="2">Remeras</option>
    <option value="3">Pantalones</option>
    <option value="4">Zapatillas</option>
    </select>
    </p>
    
    <button type="submit" class="btn btn-success">Añadir</button>
</form><?php }
}
