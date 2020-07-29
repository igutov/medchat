<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-25 18:57:50
  from '/var/www/html/project/view/templates/post/read.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef4bb6eec2ac7_12890287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaeb1da49bc3168c9fb0a960e487059cb83e30ec' => 
    array (
      0 => '/var/www/html/project/view/templates/post/read.tpl',
      1 => 1593095273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef4bb6eec2ac7_12890287 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container">
    <h1 class="text-center h4 mt-4">Просмотр записи</h1>
    <hr class="mt-1 mb-4">

    <div class="container">
        <div class="card mx-auto mb-4 rounded-0" style="max-width: 35rem;">
            <div class="card-body position-relative">
                <h4>Запись</h4>
                <?php if (isset($_smarty_tpl->tpl_vars['message_post']->value)) {?>
                <p class="form-signin-heading"><?php echo $_smarty_tpl->tpl_vars['message_post']->value;?>
</p>
                <?php }?>
                <!-- Форма обратной связи -->
                <form>
                    <div class="form-column">
                        <div class="col-sm-12">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="recommendation" class="control-label">Рекомендация</label>
                                <input disabled type="text" name="recommendation" required="required" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['recommendation'];?>
" placeholder="">

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="medicine" class="control-label">Препарат</label>
                                                                <textarea name="medicine" id="message" class="form-control" rows="5" placeholder="" required disabled><?php echo $_smarty_tpl->tpl_vars['item']->value['medicine'];?>
</textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Кнопка для отправки формы -->
                </form>
            </div>
            <div class="card-body position-relative">
                <h4>Просмотр ответов</h4>
                <ul class="list-group">
                    <li class="list-group-item">Cras justo odio</li>
                </ul>
            </div>
            <div class="card-body position-relative">
                <h4>Форма отправки вопроса</h4>
                <div class="form-group">
                    <label for="message" class="control-label">Сообщение</label>
                    <textarea id="message" class="form-control" rows="5" placeholder="Задайте вопрос касательно рекомендации" required></textarea>
                </div>
                <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Отправить</button>
            </div>
        </div>
    </div>
</main>
<?php }
}
