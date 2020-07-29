<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-20 19:49:32
  from '/var/www/html/project/view/templates/user/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eee300c5f5af3_04591066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68afbd7a3e1e4ac3038ca7280706e938daefad47' => 
    array (
      0 => '/var/www/html/project/view/templates/user/login.tpl',
      1 => 1592668112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eee300c5f5af3_04591066 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container">
    <h1 class="text-center h4 mt-4">Авторизация</h1>
    <hr class="mt-1 mb-4">

    <div class="container">
        <div class="card mx-auto mb-4 rounded-0" style="max-width: 35rem;">
            <div class="card-body position-relative">
                <?php if (isset($_smarty_tpl->tpl_vars['message_login']->value)) {?>
                <p class="form-signin-heading"><?php echo $_smarty_tpl->tpl_vars['message_login']->value;?>
</p>
                <?php }?>
                <form method="post">
                    <div class="form-row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value, 'item', false, 'key', 'name', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="control-label"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</label>
                                <input type="<?php echo $_smarty_tpl->tpl_vars['item']->value['type'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" required="required" class="form-control" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
">
                            </div>
                        </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <!-- Кнопка для отправки формы -->
                    <div class="text-right submit">
                        <button type="submit" class="btn btn-primary position-relative" name="login">Войти</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>


<?php echo '<script'; ?>
 type="text/javascript">
import {
    let email = document.getElementById('email_div'),
    let password = document.getElementById('password_div'),
} from './import_input.tpl';

<?php echo '</script'; ?>
>

<?php }
}
