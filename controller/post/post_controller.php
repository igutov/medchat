<?php
require_once 'model/post/post.php';
// require_once '../component/db.php';

$data = $_POST;
$action = $_GET['action'];

switch ($action) {
    case 'listofposts':
    // $post = new Patient();
    $smarty->assign('posts', $post->allListPosts());
    $smarty->display('user/patient/readPost.tpl');
    break;

    case 'createpost':
    // if (loginCheck($data) == 'doctor') {
    //     $smarty->assign('patients', typeSelection(0));
    //
    //     if (isset($data['create_post'])) {
    //         //validationForm();
    //         // createPost($data);
    //
    //         foreach ($data as $key => $value) {
    //             $value = validationForm($value);
    //
    //             if (empty($value)) {
    //                 $errors[] = $key;
    //             }
    //         }
    //         if (empty($errors)) {
    //             createPost($data);
    //             $smarty->assign('message_post', 'Успешно');
    //         } else {
    //             $errors_list = implode(', ',$errors);
    //             $smarty->assign('message_post', $errors_list);
    //         }
    //     } else {
    //         $smarty->assign('message_post', 'Заполните поля формы');
    //     }
    //     $smarty->display('user/doctor/formPost.tpl');
    // } else {
    //     $smarty->assign('message', 'врач');
    //     $smarty->display('errors/errorAccess.tpl');
    // }
    $post = new Doctor();
    $smarty->assign('patients', $post->typeSelection(0));

    if (!isset($data['create_post'])) {
        $smarty->assign('message_post', 'Заполните поля формы');
    } else {
        if ($post->createPost($data)) {
            // var_dump($post->postData);
            $smarty->assign('message_post', 'Успешно');
        } else {
            $smarty->assign('message_post', 'Заполните все поля формы');
        }
    }
    $smarty->display('user/doctor/formPost.tpl');
    break;
}

?>
