<?php
/* Smarty version 4.1.0, created on 2022-10-09 00:52:27
  from '/Users/louufresco/Sites/localhost/tpe/templates/modify-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63421b4b1e1c73_21305975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5929362d5e273d1b07c62bcbf5fcd240f1d39be8' => 
    array (
      0 => '/Users/louufresco/Sites/localhost/tpe/templates/modify-form.tpl',
      1 => 1665276699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_63421b4b1e1c73_21305975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Modificar producto</h2>
<form action="modify-product" method="POST">
    <p>ID: <input name="id" onlyread type="text" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"></p>
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
    
    <button type="submit">Modificar</button><?php }
}
