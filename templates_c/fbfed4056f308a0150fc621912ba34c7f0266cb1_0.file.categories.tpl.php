<?php
/* Smarty version 4.1.0, created on 2022-10-09 20:16:13
  from '/Users/louufresco/Sites/localhost/tpe/templates/show/categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63432c0d4bfef4_86344559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbfed4056f308a0150fc621912ba34c7f0266cb1' => 
    array (
      0 => '/Users/louufresco/Sites/localhost/tpe/templates/show/categories.tpl',
      1 => 1665343895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63432c0d4bfef4_86344559 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3 class="sub-title-text"> Categorias: </h3>

<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
        <li class="list-group-item">
        <a href="categorias/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</a> 
        <a class="btn btn-danger btn-sm" href="delete-category/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
"><i class="fa-solid fa-trash"></i></a>
        <a class="btn btn-warning btn-sm" href="form-modify-category/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
"><i class="fa-solid fa-pen-to-square"></i></a>
        </li>  
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <li class="list-group-item">
    <a class="btn btn-success" href="form-add-category"> <i class="fa-solid fa-plus"></i></a>
     
    </li>  
</ul>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
