<?php
/* Smarty version 4.1.0, created on 2022-10-12 00:05:33
  from '/Users/louufresco/Sites/localhost/tpe/templates/forms/login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_634604cd47f393_26162690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67a3adf723347f48cc5f15d68612075ca75e2a4c' => 
    array (
      0 => '/Users/louufresco/Sites/localhost/tpe/templates/forms/login-form.tpl',
      1 => 1665361422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634604cd47f393_26162690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content">
    <form method="POST" action="validate">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" required class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" required class="form-control" id="password" name="password">
        </div>

        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
            <div class="alert alert-danger mt-3">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>
        <button type="submit" class="btn btn-primary mt-3">Login</button>
    </form>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
