<?php
/* Smarty version 4.1.0, created on 2022-11-28 02:32:34
  from '/Users/louufresco/Sites/localhost/tpe/templates/forms/addc-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63841dc2d6be21_40855634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '985240a04184751425be147652cebba7f3982a11' => 
    array (
      0 => '/Users/louufresco/Sites/localhost/tpe/templates/forms/addc-form.tpl',
      1 => 1665361463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_63841dc2d6be21_40855634 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content">
    <h2>Añadir categoria</h2>
    <form action="add-category" method="POST">

        <p>Nombre de la categoria: <input name="nombre" required type="text"></p>
        <p>Descripcion: <input name="descripcion" required type="text"></p>
        
        <button type="submit" class="btn btn-success">Añadir</button>
    </form>
</div><?php }
}
