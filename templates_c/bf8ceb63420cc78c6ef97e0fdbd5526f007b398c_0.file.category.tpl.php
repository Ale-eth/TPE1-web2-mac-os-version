<?php
/* Smarty version 4.1.0, created on 2022-10-09 01:00:46
  from '/Users/louufresco/Sites/localhost/tpe/templates/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63421d3eb56316_13527011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf8ceb63420cc78c6ef97e0fdbd5526f007b398c' => 
    array (
      0 => '/Users/louufresco/Sites/localhost/tpe/templates/category.tpl',
      1 => 1665275079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63421d3eb56316_13527011 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value[1], 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
     
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value[0], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <li class="list-group-item"><a href="producto/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->nombre;?>
</a>  <a class="btn btn-danger btn-sm" href="delete-category/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
"><p>Eliminar</p></a></li>        
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
