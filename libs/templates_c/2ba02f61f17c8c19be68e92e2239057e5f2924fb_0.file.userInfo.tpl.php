<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-18 06:31:22
  from '/var/www/html/project/view/templates/user/userInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eead1fa8fc3b2_26020606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ba02f61f17c8c19be68e92e2239057e5f2924fb' => 
    array (
      0 => '/var/www/html/project/view/templates/user/userInfo.tpl',
      1 => 1592447480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eead1fa8fc3b2_26020606 (Smarty_Internal_Template $_smarty_tpl) {
?>







<main class="container">
    <h1 class="text-center h4 mt-4">Пользовательские данные</h1>
    <hr class="mt-1 mb-4">

    <div class="container">
        <div class="card mx-auto mb-4 rounded-0" style="max-width: 35rem;">
            <div class="card-body position-relative">
                <?php if (isset($_smarty_tpl->tpl_vars['message_login']->value)) {?>
                <p class="form-signin-heading"><?php echo $_smarty_tpl->tpl_vars['message_login']->value;?>
</p>
                <?php }?>
                <!-- Форма обратной связи -->
                <form method="post">
                    <div class="form-row">
                        <div class="col-sm-6">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="password" class="control-label">Email-адрес</label>
                                <input type="password" name="password" required="required" class="form-control" value="" placeholder="Email-адрес">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="password_new" class="control-label">Cтарый пароль</label>
                                <input type="password" name="password_new" required="required" class="form-control" value="" placeholder="Cтарый пароль">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="password_new" class="control-label">Новый пароль</label>
                                <input type="password" name="password_new" required="required" class="form-control" value="" placeholder="Новый пароль">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                                                                        <div class="col-sm-6">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="password_new_check" class="control-label">Повторите новый пароль</label>
                                <input type="password" name="password_new_check" required="required" class="form-control" value="" placeholder="Повторите новый пароль">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="name" class="control-label">Имя</label>
                                <input type="text" name="name" required="required" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" placeholder="Пароль">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="surname" class="control-label">Фамилия</label>
                                <input type="text" name="surname" required="required" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
" placeholder="Пароль">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="patronymicбрбрб" class="control-label">Отчество</label>
                                <input type="text" name="patronymic" required="required" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['patronymic']->value;?>
" placeholder="Пароль">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="password_new" class="control-label">Дата</label>
                                <input type="date" name="password_new" required="required" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Кнопка для отправки формы -->
                    <div class="text-right submit">
                        <button type="submit" class="btn btn-primary position-relative" name="changes">Изменить данные</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php }
}
