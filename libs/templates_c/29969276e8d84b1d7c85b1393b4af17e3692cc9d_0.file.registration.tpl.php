<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-20 17:34:20
  from '/var/www/html/project/view/templates/user/registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eee105cbd1dd2_89599498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29969276e8d84b1d7c85b1393b4af17e3692cc9d' => 
    array (
      0 => '/var/www/html/project/view/templates/user/registration.tpl',
      1 => 1592660057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eee105cbd1dd2_89599498 (Smarty_Internal_Template $_smarty_tpl) {
?>











<main class="container">
    <h1 class="text-center h4 mt-4">Регистрация</h1>
    <hr class="mt-1 mb-4">
    <div class="container">
        <div class="card mx-auto mb-4 rounded-0" style="max-width: 35rem;">
            <div class="card-body position-relative">
                <?php if (isset($_smarty_tpl->tpl_vars['message_registration']->value)) {?>
                <p class="form-signin-heading"><?php echo $_smarty_tpl->tpl_vars['message_registration']->value;?>
</p>
                <?php }?>
                <!-- Форма обратной связи -->
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
                    <div class="form-group agreement">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="agree" class="custom-control-input" id="customCheck">
                            <label class="custom-control-label" for="customCheck">Нажимая кнопку, я принимаю условия
                                <a href="#">Пользовательского соглашения</a> и даю своё согласие на обработку моих персональных данных, в соответствии
                                с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных».</label>
                            </div>
                        </div>
                        <!-- Кнопка для отправки формы -->
                        <div class="text-right submit">
                            <button type="submit" class="btn btn-primary position-relative" name="registration_user">Регистрация</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php }
}
