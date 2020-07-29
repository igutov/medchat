<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-17 00:59:14
  from '/var/www/html/project/view/templates/post/formPost.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee932a25822d6_96596160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2288eee17aedd039b264e70c8d3c0838561d142f' => 
    array (
      0 => '/var/www/html/project/view/templates/post/formPost.tpl',
      1 => 1592341153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee932a25822d6_96596160 (Smarty_Internal_Template $_smarty_tpl) {
?>















<main class="container">
    <h1 class="text-center h4 mt-4">Форма создания записи</h1>
    <hr class="mt-1 mb-4">

    <div class="container">
        <div class="card mx-auto mb-4 rounded-0" style="max-width: 35rem;">
            <div class="card-body position-relative">
                <?php if (isset($_smarty_tpl->tpl_vars['message_post']->value)) {?>
                    <p class="form-signin-heading"><?php echo $_smarty_tpl->tpl_vars['message_post']->value;?>
</p>
                <?php }?>
                <!-- Форма обратной связи -->
                <form method="post">
                    <select class="form-control" name="id_patient">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['patients']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['surname'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['patronymic'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>

                    <div class="form-row">
                        <div class="col-sm-6">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="series" class="control-label">Серия</label>
                                <input type="text" name="series" required="required" class="form-control" value="" placeholder="Email-адрес">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="series" class="control-label">Номер</label>
                                <input type="text" name="series" required="required" class="form-control" value="" placeholder="Email-адрес">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="password" class="control-label">Пароль</label>
                                <input id="email" type="password" name="password" required="required" class="form-control" value="" placeholder="Пароль">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Кнопка для отправки формы -->
                    <div class="text-right submit">
                        <button type="submit" class="btn btn-primary position-relative" name="login">Войти</button>
                    </div>
                </form>
            </div>
            <div class="card-body position-relative">
                <?php if (isset($_smarty_tpl->tpl_vars['message_post']->value)) {?>
                    <p class="form-signin-heading"><?php echo $_smarty_tpl->tpl_vars['message_post']->value;?>
</p>
                <?php }?>
                <!-- Форма обратной связи -->
                <form method="post">
                    <select class="form-control" name="id_patient">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['patients']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['surname'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['patronymic'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>

                    <div class="form-row">
                        <div class="col-sm-6">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="series" class="control-label">Серия</label>
                                <input type="text" name="series" required="required" class="form-control" value="" placeholder="Email-адрес">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="series" class="control-label">Номер</label>
                                <input type="text" name="series" required="required" class="form-control" value="" placeholder="Email-адрес">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="password" class="control-label">Пароль</label>
                                <input id="email" type="password" name="password" required="required" class="form-control" value="" placeholder="Пароль">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Кнопка для отправки формы -->
                    <div class="text-right submit">
                        <button type="submit" class="btn btn-primary position-relative" name="login">Войти</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main><?php }
}
