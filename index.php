<?php
require_once('libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'view/templates/';
$smarty->compile_dir = 'libs/templates_c/';
$smarty->config_dir = 'libs/configs/';
$smarty->cache_dir = 'libs/cache/';

require_once 'component/db.php';

$smarty->display('view/index.tpl');



if (isset($_GET['page']) && isset($_GET['action'])) {
    $page = $_GET['page'];
    $action = $_GET['action'];
    $data = $_POST;

    switch ($page) {
        case 'admin':
        require_once 'controller/AdminController.php';
        $post = new AdminController($data, $action, $smarty);
        break;

        case 'post':
        require_once 'controller/PostController.php';
        $post = new PostController($data, $action, $smarty);
        break;

        case 'user':
        require_once 'controller/UserController.php';
        $post = new UserController($data, $action, $smarty);
        break;
    }
}
?>
