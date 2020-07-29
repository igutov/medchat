<?php
// require_once 'model/user/checkAccount.php';
require_once 'model/post/post.php';

$data = $_POST;
$action = $_GET['action'];

case 'createpost':
// if (isset($data['create_post'])) {
//
//     $post = new Post($data);
//     $post = createPost();
// } else {
//     $smarty->assign('message_post', 'Заполните поля формы');
// }
// if (loginCheck($data) == 'doctor') {
//     $smarty->assign('patients', typeSelection(0));

if (isset($data['create_post'])) {
    //validationForm();
    // createPost($data);

    foreach ($data as $key => $value) {
        $value = validationForm($value);

        if (empty($value)) {
            $errors[] = $key;
        }
    }
    if (empty($errors)) {
        $post = new Post($data);
        $post = createPost();
        $smarty->assign('message_post', 'Успешно');
    } else {
        $errors_list = implode(', ',$errors);
        $smarty->assign('message_post', $errors_list);
    }
} else {
    $smarty->assign('message_post', 'Заполните поля формы');
}
$smarty->display('user/doctor/formPost.tpl');
} else {
    $smarty->assign('message', 'врач');
    $smarty->display('errors/errorAccess.tpl');
}
break;
}

?>
