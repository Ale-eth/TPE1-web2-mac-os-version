<?php
/* Smarty version 4.1.0, created on 2022-10-09 01:37:25
  from '/Users/louufresco/Sites/localhost/tpe/templates/all-products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_634225d57ac0a8_65543185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd424cebe7a298a0887d5034bfb4c312e95f5b2f5' => 
    array (
      0 => '/Users/louufresco/Sites/localhost/tpe/templates/all-products.tpl',
      1 => 1665277231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634225d57ac0a8_65543185 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3> Todos los productos: </h3>

<button class="btn btn-success"><a href="form-add-product">Añadir producto</button>

<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <li class="list-group-item"><a href="producto/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->nombre;?>
</a>  <a class="btn btn-danger btn-sm" href="delete-product/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
"><p>Eliminar</p></a></li>        
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>











<?php }
}
