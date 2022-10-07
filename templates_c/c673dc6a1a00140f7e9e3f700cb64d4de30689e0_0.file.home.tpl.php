<?php
/* Smarty version 4.1.0, created on 2022-10-07 05:06:07
  from 'C:\xampp\htdocs\2022\Web 2\web2tpeParte1\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_633f979f11e7a7_65156253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c673dc6a1a00140f7e9e3f700cb64d4de30689e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\2022\\Web 2\\web2tpeParte1\\templates\\home.tpl',
      1 => 1665111965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633f979f11e7a7_65156253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h2>Montagne tienda de ropa</h2>
        <h3> Que queres ver?</h3>
        <a href="categorias"><h3>Categorias</h3></a>       
        <a href="productos-todos"><h3>Todos los productos</h3></a>
        
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
