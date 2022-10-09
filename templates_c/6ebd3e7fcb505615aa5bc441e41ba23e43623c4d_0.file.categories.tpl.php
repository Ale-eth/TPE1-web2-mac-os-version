<?php
/* Smarty version 4.1.0, created on 2022-10-09 01:00:15
  from '/Users/louufresco/Sites/localhost/tpe/templates/categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63421d1fdab211_60896616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ebd3e7fcb505615aa5bc441e41ba23e43623c4d' => 
    array (
      0 => '/Users/louufresco/Sites/localhost/tpe/templates/categories.tpl',
      1 => 1665277213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63421d1fdab211_60896616 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3> Categorias: </h3>

<button class="btn btn-success"><a href="form-add-category">Añadir categoria</button>

<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
        <li class="list-group-item"><a href="categorias/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</a>  <a class="btn btn-danger btn-sm" href="delete-category/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
"><p>Eliminar</p></a></li>        
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
