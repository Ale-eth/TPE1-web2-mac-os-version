<?php
/* Smarty version 4.1.0, created on 2022-10-09 06:24:45
  from '/Users/louufresco/Sites/localhost/tpe/templates/show/all-products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6342692d782f62_10316112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e028f2d398be3709db6d16ad3f83350688fae78' => 
    array (
      0 => '/Users/louufresco/Sites/localhost/tpe/templates/show/all-products.tpl',
      1 => 1665296681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6342692d782f62_10316112 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3 class="sub-title-text"> Todos los productos: </h3>


<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <li class="normal-text" class="list-group-item">
        <a href="producto/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->nombre;?>
</a>
        <a class="btn btn-danger btn-sm" href="delete-product/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
">
        <i class="fa-solid fa-trash"></i></a>
        </li>        
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<a class="btn btn-success" href="form-add-product"> <i class="fa-solid fa-plus"></i> </a>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>











<?php }
}
