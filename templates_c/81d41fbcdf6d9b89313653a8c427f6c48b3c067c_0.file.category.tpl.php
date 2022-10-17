<?php
/* Smarty version 4.1.0, created on 2022-10-12 03:00:10
  from '/Users/louufresco/Sites/localhost/tpe/templates/show/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63462dba1f21f4_34071725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81d41fbcdf6d9b89313653a8c427f6c48b3c067c' => 
    array (
      0 => '/Users/louufresco/Sites/localhost/tpe/templates/show/category.tpl',
      1 => 1665540576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63462dba1f21f4_34071725 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="content">
    <ul class="list-group">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value[1], 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <li class="normal-text" class="sub-title-text" class="list-group-item"> <h3 class="sub-title-text"> <?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
 : </h3>   
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value[0], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <li class="normal-text" class="list-group-item">
                <a href="producto/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->nombre;?>
</a> 

                <?php if ((isset($_SESSION['IS_LOGGED']))) {?>
                    <a class="btn btn-danger btn-sm" href="delete-category/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
"><i class="fa-solid fa-trash"></i></a>
                <?php }?>
            </li>        
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
