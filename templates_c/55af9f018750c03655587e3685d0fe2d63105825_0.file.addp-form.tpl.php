<?php
/* Smarty version 4.1.0, created on 2022-11-28 04:02:52
  from '/Users/louufresco/Sites/localhost/tpe/templates/forms/addp-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_638432ec2fc231_97600920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55af9f018750c03655587e3685d0fe2d63105825' => 
    array (
      0 => '/Users/louufresco/Sites/localhost/tpe/templates/forms/addp-form.tpl',
      1 => 1669608169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_638432ec2fc231_97600920 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content">
    <h2>Añadir producto</h2>
    <form action="add-product" method="POST">
        <p>Nombre del producto: <input name="nombre" required type="text"></p>
        <p>Precio: <input name="precio" required type="text"></p>
        <p>Descripcion: <input name="descripcion" required type="text"></p>
        
        <?php $_smarty_tpl->_assignInScope('count', 1);?>
        <p>Categoria:
        <select name="categoria" required>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        </p>
        
        <button type="submit" class="btn btn-success">Añadir</button>
    </form>
</div>
<?php }
}
