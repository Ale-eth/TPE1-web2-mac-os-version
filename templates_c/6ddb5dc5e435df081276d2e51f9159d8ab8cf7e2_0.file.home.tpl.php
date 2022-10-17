<?php
/* Smarty version 4.1.0, created on 2022-10-12 00:07:02
  from '/Users/louufresco/Sites/localhost/tpe/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_634605267dcc46_90299980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ddb5dc5e435df081276d2e51f9159d8ab8cf7e2' => 
    array (
      0 => '/Users/louufresco/Sites/localhost/tpe/templates/home.tpl',
      1 => 1665533220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634605267dcc46_90299980 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content">

        <h3 class="sub-title-text"> Que queres ver?</h3>
        <a class="normal-text" href="categorias"><h3>Categorias</h3></a>       
        <a class="normal-text" href="productos-todos"><h3>Todos los productos</h3></a>

</div>
        
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
