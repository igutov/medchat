<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-28 18:02:49
  from '/var/www/html/sitemed/view/templates/user/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ecfc489f13019_53900486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e6b039ba4fc9245119fc2b6702a46ba18f0e7ed' => 
    array (
      0 => '/var/www/html/sitemed/view/templates/user/login.tpl',
      1 => 1590674566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecfc489f13019_53900486 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container">
    <form class="form-signin" method="post">
        <?php if (isset($_smarty_tpl->tpl_vars['message_login']->value)) {?>
        <h2 class="form-signin-heading"><?php echo $_smarty_tpl->tpl_vars['message_login']->value;?>
</h2>
        <?php }?>
        <label for="inputEmail" class="sr-only">Логин</label>
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Пароль</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Войти</button>
    </form>
</main>
<?php }
}
