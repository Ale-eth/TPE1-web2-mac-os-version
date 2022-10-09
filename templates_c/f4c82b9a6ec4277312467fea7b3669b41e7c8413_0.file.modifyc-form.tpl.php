<?php
/* Smarty version 4.1.0, created on 2022-10-09 04:15:23
  from '/Users/louufresco/Sites/localhost/tpe/templates/forms/modifyc-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63424adb17ef77_63013241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4c82b9a6ec4277312467fea7b3669b41e7c8413' => 
    array (
      0 => '/Users/louufresco/Sites/localhost/tpe/templates/forms/modifyc-form.tpl',
      1 => 1665286800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_63424adb17ef77_63013241 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Modificar categoria</h2>
<form action="modify-category" method="POST">
    <input name="id" style="display:none;" type="text" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <p>Nombre de la categoria: <input name="nombre" type="text"></p>
    <p>Descripcion: <input name="descripcion" type="text"></p>

    <button type="submit">Modificar</button>
</form><?php }
}
