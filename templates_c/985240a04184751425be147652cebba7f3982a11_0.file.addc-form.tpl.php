<?php
/* Smarty version 4.1.0, created on 2022-10-09 20:16:15
  from '/Users/louufresco/Sites/localhost/tpe/templates/forms/addc-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63432c0f2b81b3_92934354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '985240a04184751425be147652cebba7f3982a11' => 
    array (
      0 => '/Users/louufresco/Sites/localhost/tpe/templates/forms/addc-form.tpl',
      1 => 1665346562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_63432c0f2b81b3_92934354 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="form-div">
    <h2>Añadir categoria</h2>
    <form action="add-category" method="POST">

        <p>Nombre de la categoria: <input name="nombre" type="text"></p>
        <p>Descripcion: <input name="descripcion" type="text"></p>
        
        <button type="submit" class="btn btn-success">Añadir</button>
    </form>
</div><?php }
}
