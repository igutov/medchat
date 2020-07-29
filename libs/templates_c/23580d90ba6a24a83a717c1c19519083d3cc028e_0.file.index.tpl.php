<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-02 13:42:07
  from '/var/www/html/sitemed/view/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed61eef0d6ce6_70490968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23580d90ba6a24a83a717c1c19519083d3cc028e' => 
    array (
      0 => '/var/www/html/sitemed/view/index.tpl',
      1 => 1591090912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed61eef0d6ce6_70490968 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>

        <div class=" navbar" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php if (isset($_smarty_tpl->tpl_vars['registration_user']->value)) {?>
                <li class="nav-item">
                    <a class="nav-link" href="?page=admin&action=registration">Зарегистрируйте нового пользователя</a>
                </li>
                <?php }?>

                <?php if (isset($_smarty_tpl->tpl_vars['name_user']->value)) {?>
                <li class="nav-item">
                    <a class="nav-link" href="?page=user&action=userinfo">Личный кабинет, <?php echo $_smarty_tpl->tpl_vars['name_user']->value;?>
</a>
                </li>
                <?php }?>

                <?php if (isset($_smarty_tpl->tpl_vars['userLoginType']->value)) {?>
                <li class="nav-item">
                    <a class="nav-link" href="?page=post&action=<?php echo $_smarty_tpl->tpl_vars['userLoginType']->value;?>
">Рецепты</a>
                </li>
                <?php }?>
                <li class="nav-item">
                    <a class="nav-link" href="?page=user&action=<?php echo $_smarty_tpl->tpl_vars['authorization']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['authorization_text']->value;?>
</a>
                </li>
            </ul>
        </div>
    </nav>

        



<!-- Footer -->
<footer class="page-footer font-small blue pt-4">
    <div class="container-fluid text-center text-md-left">
        <div class="row">
            <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
    </div>
</footer>
</body>
</html>
<?php }
}
