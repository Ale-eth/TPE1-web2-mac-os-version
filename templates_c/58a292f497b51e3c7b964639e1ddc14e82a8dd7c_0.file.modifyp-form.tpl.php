<?php
/* Smarty version 4.1.0, created on 2022-10-09 03:40:49
  from '/Users/louufresco/Sites/localhost/tpe/templates/forms/modifyp-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_634242c138c752_13057421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58a292f497b51e3c7b964639e1ddc14e82a8dd7c' => 
    array (
      0 => '/Users/louufresco/Sites/localhost/tpe/templates/forms/modifyp-form.tpl',
      1 => 1665286799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634242c138c752_13057421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Modificar producto</h2>
<form action="modify-product" method="POST">
    <input name="id" style="display:none;" type="text" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
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
    
    <button type="submit">Modificar</button>
</form><?php }
}
