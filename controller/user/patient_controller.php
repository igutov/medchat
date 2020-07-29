<?php
// require_once 'model/user/checkAccount.php';
require_once 'model/post/post.php';

$data = $_POST;
$action = $_GET['action'];

switch ($action) {
    case 'listofposts':
    // if (loginCheck($data) == 'patient') {
    //     $smarty->assign('posts', allListPosts());
    //     $smarty->display('user/patient/readPost.tpl');
    // } else {
    //     $smarty->assign('message', 'пациент');
    //     $smarty->display('errors/errorAccess.tpl');
    // }
    echo "hi";
    break;
}

?>
