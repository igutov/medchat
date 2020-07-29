<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-26 12:06:21
  from '/var/www/html/project/view/templates/post/create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef5ac7d57e985_29802355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '568346f6e211b113d9c82663c6846b3d245cd9d5' => 
    array (
      0 => '/var/www/html/project/view/templates/post/create.tpl',
      1 => 1593158764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef5ac7d57e985_29802355 (Smarty_Internal_Template $_smarty_tpl) {
?>















<main class="container">
    <h1 class="text-center h4 mt-4"><?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
</h1>
    <hr class="mt-1 mb-4">

    <div class="container">
        <div class="card mx-auto mb-4 rounded-0" style="max-width: 35rem;">
            <div class="card-body position-relative">
                <h4>Запись</h4>
                <?php if (isset($_smarty_tpl->tpl_vars['message_post']->value)) {?>
                <p class="form-signin-heading"><?php echo $_smarty_tpl->tpl_vars['message_post']->value;?>
</p>
                <?php }?>
                <form method="post">
                    <?php if (isset($_smarty_tpl->tpl_vars['patients']->value)) {?>
                    <div class="form-column">
                        <div class="col-sm-12">
                            <select class="form-control" name="patient">
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
                        </div>
                        <div class="col-sm-12">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="medicine" class="control-label">Препарат</label>
                                <input type="text" name="medicine" required="required" class="form-control" value="" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="recommendation" class="control-label">Рекомендация</label>
                                <textarea name="recommendation" id="message" class="form-control" rows="5" placeholder="" required></textarea>
                            </div>
                        </div>
                        <div class="text-right submit">
                            <button type="submit" class="btn btn-primary position-relative" name="create_post">Отправить</button>
                        </div>
                    </div>
                    <?php } else { ?>
                    <div class="form-column">
                        <div class="list-group">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1"><?php echo $_smarty_tpl->tpl_vars['item']->value['medicine'];?>
</h6>
                                                                    </div>
                                <p class="mb-1"><?php echo $_smarty_tpl->tpl_vars['item']->value['recommendation'];?>
</small>
                                </a>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                                                </div>
<?php }?>
</form>
<?php if (isset($_smarty_tpl->tpl_vars['comments']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
<div class="card-body position-relative">
    <ul class="list-group">
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
</li>
    </ul>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if (isset($_smarty_tpl->tpl_vars['message_comment']->value)) {?>
<p class="form-signin-heading"><?php echo $_smarty_tpl->tpl_vars['message_comment']->value;?>
</p>
<?php }?>
<form method="post">
    <div class="card-body position-relative">
        <h4><?php echo $_smarty_tpl->tpl_vars['comment_name']->value;?>
</h4>
        <div class="form-group">
            <label for="message" class="control-label">Сообщение</label>
            <textarea name="message" class="form-control" rows="5" placeholder="Заполните поле" required></textarea>
        </div>
        <button type="submit" class="btn btn-success btn-lg pull-right" name="create_comment">Отправить</button>
    </div>
</form>
</div>
</div>
</div>
</main>
<?php }
}
