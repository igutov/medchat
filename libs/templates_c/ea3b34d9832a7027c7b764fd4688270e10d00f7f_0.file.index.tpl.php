<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-20 20:51:14
  from '/var/www/html/project/view/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eee3e821b52c8_33942322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea3b34d9832a7027c7b764fd4688270e10d00f7f' => 
    array (
      0 => '/var/www/html/project/view/index.tpl',
      1 => 1592671503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eee3e821b52c8_33942322 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/bootstrap-4.4.1-dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="style/css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>

        <div class="navbar" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="?page=post&action=index">Меню записей</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=user&action=index">Меню пользователя</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=admin&action=index">Админка</a>
                </li>
            </ul>
        </div>
    </nav>


    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">
        <div class="container-fluid text-center text-md-left">
            <div class="row">
                <div class="col-md-3 mb-md-0 mb-3">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Политика в отношении обработки персональных данных</a>
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
