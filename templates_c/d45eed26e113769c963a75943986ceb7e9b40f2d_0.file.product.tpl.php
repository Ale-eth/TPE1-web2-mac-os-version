<?php
/* Smarty version 4.1.0, created on 2022-10-09 06:28:22
  from '/Users/louufresco/Sites/localhost/tpe/templates/show/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63426a06b58236_53940626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd45eed26e113769c963a75943986ceb7e9b40f2d' => 
    array (
      0 => '/Users/louufresco/Sites/localhost/tpe/templates/show/product.tpl',
      1 => 1665296899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63426a06b58236_53940626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value[0], 'productprop');
$_smarty_tpl->tpl_vars['productprop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['productprop']->value) {
$_smarty_tpl->tpl_vars['productprop']->do_else = false;
?>
        <li class="list-group-item">
        <h3>Nombre del producto: </h3><?php echo $_smarty_tpl->tpl_vars['productprop']->value->nombre;?>

        <h3>Precio: </h3><?php echo $_smarty_tpl->tpl_vars['productprop']->value->precio;?>
$
        <h3>Descripcion del producto: </h3><?php echo $_smarty_tpl->tpl_vars['productprop']->value->descripcion;?>

        </br>
        <a class="btn btn-warning" href="form-modify-product/<?php echo $_smarty_tpl->tpl_vars['productprop']->value->id_producto;?>
"><i class="fa-solid fa-pen-to-square"></i></a>
        <a class="btn btn-danger btn-sm" href="delete-product/<?php echo $_smarty_tpl->tpl_vars['productprop']->value->id_producto;?>
"><i class="fa-solid fa-trash"></i></a>
        </li>        
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
