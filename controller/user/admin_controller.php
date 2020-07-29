<?php
require_once 'model/user/userAction.php';
// require_once 'model/user/checkAccount.php';
// require_once 'model/admin/adminAction.php';

$data = $_POST;
$action = $_GET['action'];

switch ($action) {
    case 'registration':
    // echo $GLOBALS['loginCheck'];
    // if (!isset($admin)) {
    //     $smarty->assign('message', 'администратор');
    //     $smarty->display('errors/errorAccess.tpl');
    // }
    if (!isset($data['registration_user'])) {
        $smarty->assign('message_registration', 'Введите данные нового пользователя');

        // $admin = new Admin($data);
        // $admin->createUser();
    } else {
        $admin = new Admin();

        if ($admin->createUser($data)) {
            $smarty->assign('message_registration', 'Успешно');
        } else {
            $smarty->assign('message_registration', 'Ошибка');
        }
    }
    // if (loginCheck($data) == 1) {
    //     $smarty->display('errors/errorLogin.tpl');
    // } elseif (loginCheck($data) != 'admin') {
    //     $smarty->assign('message', 'администратор');
    //     $smarty->display('errors/errorAccess.tpl');
    // } else {
    //     if (($_SESSION['logged_user']->user_type) == 2) {
    //         // if (loginCheck($data) == 'admins') {
    //         $smarty->assign('message_registration', 'Введите данные нового пользователя');
    //         if (isset($data['registration_user'])) {
    //
    //             // $email = validationForm($data['email']);
    //
    //             foreach ($data as $key => $value) {
    //                 //$value = validationForm($value);
    //
    //                 if (empty($value) && ($key != 'user_type')) {
    //                     $errors[] = $key;
    //                 }
    //             }
    //             if (empty($errors)) {
    //                 createUser($data);
    //                 $smarty->assign('message_registration', 'Успешно');
    //                 header("Location: ".$_SERVER['REQUEST_URI']);
    //             } else {
    //                 $errors_list = implode(', ',$errors);
    //                 $smarty->assign('message_error', 'Введите данные нового пользователя');
    //                 $smarty->assign('message_registration', $errors_list);
    //             }
    //         }
    //         $allUserInfo = allUserInfo();
    //         $smarty->assign('all_user_info', $allUserInfo);
    //         $smarty->display('user/admin/registration.tpl');
    //         // $smarty->display('user/admin/userList.tpl');
    //     }
    // }
    // $allUserInfo = allUserInfo();
    // $smarty->assign('all_user_info', $allUserInfo);
    $smarty->display('user/admin/registration.tpl');
    break;

    case 'userinfo':
    if (loginCheck($data) == 1) {
        $smarty->display('errors/errorLogin.tpl');
    } else {
        userlInfo($data);

        switch ($_SESSION['logged_user']->user_type) {
            case 0:
            $smarty->assign('userType', 'пациента');
            break;
            case 1:
            $smarty->assign('userType', 'врача');
            break;
            case 2:
            $smarty->assign('userType', 'администратора');
            break;
        }
        $smarty->assign('email',$_SESSION['logged_user']->email);
        $smarty->assign('name',$_SESSION['logged_user']->name);
        $smarty->assign('surname',$_SESSION['logged_user']->surname);
        $smarty->assign('patronymic',$_SESSION['logged_user']->patronymic);
        $smarty->assign('date',$_SESSION['logged_user']->date);
        $smarty->display('user/userInfo.tpl');

        // if (isset($data['changes'])) { ????
        //
        // }
    }
    break;
}
?>
