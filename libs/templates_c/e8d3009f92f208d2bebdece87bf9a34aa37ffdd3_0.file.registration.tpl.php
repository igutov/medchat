<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-07 18:25:32
  from '/var/www/html/sitemed/view/templates/user/registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb41a5c6dd8d9_00759004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8d3009f92f208d2bebdece87bf9a34aa37ffdd3' => 
    array (
      0 => '/var/www/html/sitemed/view/templates/user/registration.tpl',
      1 => 1588783662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb41a5c6dd8d9_00759004 (Smarty_Internal_Template $_smarty_tpl) {
?><main>
    <section>
        <h6>Регистрация</h6>
        <form class="" action="" method="post">
            <p><input type="radio" name="user_type" value="2">Администратор</p>
            <p><input type="radio" name="user_type" value="1">Врач</p>
            <p><input type="radio" name="user_type" value="0">Пациент</p>

            <label for="email">Логин</label>
            <input type="text" name="email" value="">

            <label for="name">Имя</label>
            <input type="text" name="name" value="">

            <label for="surname">Фамилия</label>
            <input type="text" name="surname" value="">

            <label for="password">Пароль</label>
            <input type="password" name="password" value="">

            <label for="password_check">Пароль(подтверждение)</label>
            <input type="password" name="password_check" value="">

            <input type="submit" name="registration_user" value="Регистрация">
        </form>
    </section>
</main>
<?php }
}
