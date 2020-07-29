<?php
// require_once 'model/user/checkAccount.php';
require_once 'model/user/userAction.php';

$data = $_POST;
$action = $_GET['action'];

if ($action == 'login') {
    if (!isset($data['login'])) {
        $smarty->assign('message_login', 'Вы можете авторизоваться');
    } else {
        $user = new User($data);
        if ($user->login()) {
            $smarty->assign('message_login', 'Успешно');

            switch ($user->userType) {
                case 0:
                header('Location: ?page=post&action=listofposts');
                break;

                case 1:
                header('Location: ?page=post&action=createpost');
                break;

                case 2:
                header('Location: ?page=admin&action=userinfo');
                break;
            }

        } else {
            $smarty->assign('message_login', 'Аккаунт или пароль не корректен');
        }
    }
    $smarty->display('user/login.tpl');
} elseif ($action == 'logout') {
    logout($action == 'logout');
    header('Location: ?page=user&action=login');
} elseif ($action == 'userinfo') {
    userlInfo($data);

    $smarty->assign('email',$_SESSION['logged_user']->email);
    $smarty->assign('name',$_SESSION['logged_user']->name);
    $smarty->assign('surname',$_SESSION['logged_user']->surname);
    $smarty->assign('patronymic',$_SESSION['logged_user']->patronymic);
    $smarty->assign('date',$_SESSION['logged_user']->date);
    $smarty->display('user/userInfo.tpl');
}
// else {
//    if (!isset($_SESSION['logged_user'])) {
//        $smarty->display('errors/errorLogin.tpl');
//     } else {
//         switch ($action) {
//             case 'logout':
//             logout();
//             header('Location: ?page=user&action=login');
//             break;
//
//             // case 'registration':
//             // // echo $GLOBALS['loginCheck'];
//             // // if (!isset($admin)) {
//             // //     $smarty->assign('message', 'администратор');
//             // //     $smarty->display('errors/errorAccess.tpl');
//             // // }
//             // if (!isset($data['registration_user'])) {
//             //     $smarty->assign('message_registration', 'Введите данные нового пользователя');
//             //
//             //     // $admin = new Admin($data);
//             //     // $admin->createUser();
//             // } else {
//             //     $admin = new Admin($data);
//             //
//             //     if ($admin->createUser()) {
//             //         $smarty->assign('message_registration', 'Успешно');
//             //     } else {
//             //         $smarty->assign('message_registration', 'Ошибка');
//             //     }
//             // }
//             //
//             // $allUserInfo = allUserInfo();
//             // $smarty->assign('all_user_info', $allUserInfo);
//             // $smarty->display('user/admin/registration.tpl');
//             // break;
//
//             case 'userinfo':
//             // if (loginCheck($data) == 1) {
//             //     $smarty->display('errors/errorLogin.tpl');
//             // } else {
//             userlInfo($data);
//
//             switch ($_SESSION['logged_user']->user_type) {
//                 case 0:
//                 $smarty->assign('userType', 'пациента');
//                 break;
//                 case 1:
//                 $smarty->assign('userType', 'врача');
//                 break;
//                 case 2:
//                 $smarty->assign('userType', 'администратора');
//                 break;
//             }
//             $smarty->assign('email',$_SESSION['logged_user']->email);
//             $smarty->assign('name',$_SESSION['logged_user']->name);
//             $smarty->assign('surname',$_SESSION['logged_user']->surname);
//             $smarty->assign('patronymic',$_SESSION['logged_user']->patronymic);
//             $smarty->assign('date',$_SESSION['logged_user']->date);
//             $smarty->display('user/userInfo.tpl');
//
//             break;
//         }
//     }
// }


// elseif (isset($_SESSION['logged_user'])) {
//     $smarty->display('errors/errorLogin.tpl');
// } else {
//     switch ($action) {
//
//         case 'logout':
//         // unset($loginCheck);
//         logout();
//         header('Location: ?page=user&action=login');
//         break;
//
//         case 'registration':
//         echo $GLOBALS['loginCheck'];
//         // if (!isset($admin)) {
//         //     $smarty->assign('message', 'администратор');
//         //     $smarty->display('errors/errorAccess.tpl');
//         // }
//         if (!isset($data['registration_user'])) {
//             $smarty->assign('message_registration', 'Введите данные нового пользователя');
//
//             // $admin = new Admin($data);
//             // $admin->createUser();
//         } else {
//             $admin = new Admin($data);
//
//             if ($admin->createUser()) {
//                 $smarty->assign('message_registration', 'Успешно');
//             } else {
//                 $smarty->assign('message_registration', 'Ошибка');
//             }
//         }
//         // if (loginCheck($data) == 1) {
//         //     $smarty->display('errors/errorLogin.tpl');
//         // } elseif (loginCheck($data) != 'admin') {
//         //     $smarty->assign('message', 'администратор');
//         //     $smarty->display('errors/errorAccess.tpl');
//         // } else {
//         //     if (($_SESSION['logged_user']->user_type) == 2) {
//         //         // if (loginCheck($data) == 'admins') {
//         //         $smarty->assign('message_registration', 'Введите данные нового пользователя');
//         //         if (isset($data['registration_user'])) {
//         //
//         //             // $email = validationForm($data['email']);
//         //
//         //             foreach ($data as $key => $value) {
//         //                 //$value = validationForm($value);
//         //
//         //                 if (empty($value) && ($key != 'user_type')) {
//         //                     $errors[] = $key;
//         //                 }
//         //             }
//         //             if (empty($errors)) {
//         //                 createUser($data);
//         //                 $smarty->assign('message_registration', 'Успешно');
//         //                 header("Location: ".$_SERVER['REQUEST_URI']);
//         //             } else {
//         //                 $errors_list = implode(', ',$errors);
//         //                 $smarty->assign('message_error', 'Введите данные нового пользователя');
//         //                 $smarty->assign('message_registration', $errors_list);
//         //             }
//         //         }
//         //         $allUserInfo = allUserInfo();
//         //         $smarty->assign('all_user_info', $allUserInfo);
//         //         $smarty->display('user/admin/registration.tpl');
//         //         // $smarty->display('user/admin/userList.tpl');
//         //     }
//         // }
//         $allUserInfo = allUserInfo();
//         $smarty->assign('all_user_info', $allUserInfo);
//         $smarty->display('user/admin/registration.tpl');
//         break;
//
//         case 'userinfo':
//         if (loginCheck($data) == 1) {
//             $smarty->display('errors/errorLogin.tpl');
//         } else {
//             userlInfo($data);
//
//             switch ($_SESSION['logged_user']->user_type) {
//                 case 0:
//                 $smarty->assign('userType', 'пациента');
//                 break;
//                 case 1:
//                 $smarty->assign('userType', 'врача');
//                 break;
//                 case 2:
//                 $smarty->assign('userType', 'администратора');
//                 break;
//             }
//             $smarty->assign('email',$_SESSION['logged_user']->email);
//             $smarty->assign('name',$_SESSION['logged_user']->name);
//             $smarty->assign('surname',$_SESSION['logged_user']->surname);
//             $smarty->assign('patronymic',$_SESSION['logged_user']->patronymic);
//             $smarty->assign('date',$_SESSION['logged_user']->date);
//             $smarty->display('user/userInfo.tpl');
//
//             // if (isset($data['changes'])) { ????
//             //
//             // }
//         }
//         break;
//     }
// }

// echo loginCheck;
// if (empty($loginCheck)) {
//     $smarty->display('errors/errorLogin.tpl');
// } else {
//     switch ($action) {
//
//         case 'logout':
//         // unset($loginCheck);
//         logout();
//         header('Location: ?page=user&action=login');
//         break;
//
//         case 'registration':
//         echo $GLOBALS['loginCheck'];
//         // if (!isset($admin)) {
//         //     $smarty->assign('message', 'администратор');
//         //     $smarty->display('errors/errorAccess.tpl');
//         // }
//         if (!isset($data['registration_user'])) {
//             $smarty->assign('message_registration', 'Введите данные нового пользователя');
//
//             // $admin = new Admin($data);
//             // $admin->createUser();
//         } else {
//             $admin = new Admin($data);
//
//             if ($admin->createUser()) {
//                 $smarty->assign('message_registration', 'Успешно');
//             } else {
//                 $smarty->assign('message_registration', 'Ошибка');
//             }
//         }
//         // if (loginCheck($data) == 1) {
//         //     $smarty->display('errors/errorLogin.tpl');
//         // } elseif (loginCheck($data) != 'admin') {
//         //     $smarty->assign('message', 'администратор');
//         //     $smarty->display('errors/errorAccess.tpl');
//         // } else {
//         //     if (($_SESSION['logged_user']->user_type) == 2) {
//         //         // if (loginCheck($data) == 'admins') {
//         //         $smarty->assign('message_registration', 'Введите данные нового пользователя');
//         //         if (isset($data['registration_user'])) {
//         //
//         //             // $email = validationForm($data['email']);
//         //
//         //             foreach ($data as $key => $value) {
//         //                 //$value = validationForm($value);
//         //
//         //                 if (empty($value) && ($key != 'user_type')) {
//         //                     $errors[] = $key;
//         //                 }
//         //             }
//         //             if (empty($errors)) {
//         //                 createUser($data);
//         //                 $smarty->assign('message_registration', 'Успешно');
//         //                 header("Location: ".$_SERVER['REQUEST_URI']);
//         //             } else {
//         //                 $errors_list = implode(', ',$errors);
//         //                 $smarty->assign('message_error', 'Введите данные нового пользователя');
//         //                 $smarty->assign('message_registration', $errors_list);
//         //             }
//         //         }
//         //         $allUserInfo = allUserInfo();
//         //         $smarty->assign('all_user_info', $allUserInfo);
//         //         $smarty->display('user/admin/registration.tpl');
//         //         // $smarty->display('user/admin/userList.tpl');
//         //     }
//         // }
//         $allUserInfo = allUserInfo();
//         $smarty->assign('all_user_info', $allUserInfo);
//         $smarty->display('user/admin/registration.tpl');
//         break;
//
//         case 'userinfo':
//         if (loginCheck($data) == 1) {
//             $smarty->display('errors/errorLogin.tpl');
//         } else {
//             userlInfo($data);
//
//             switch ($_SESSION['logged_user']->user_type) {
//                 case 0:
//                 $smarty->assign('userType', 'пациента');
//                 break;
//                 case 1:
//                 $smarty->assign('userType', 'врача');
//                 break;
//                 case 2:
//                 $smarty->assign('userType', 'администратора');
//                 break;
//             }
//             $smarty->assign('email',$_SESSION['logged_user']->email);
//             $smarty->assign('name',$_SESSION['logged_user']->name);
//             $smarty->assign('surname',$_SESSION['logged_user']->surname);
//             $smarty->assign('patronymic',$_SESSION['logged_user']->patronymic);
//             $smarty->assign('date',$_SESSION['logged_user']->date);
//             $smarty->display('user/userInfo.tpl');
//
//             // if (isset($data['changes'])) { ????
//             //
//             // }
//         }
//         break;
//     }
// }

// }



// switch ($action) {
//     case 'login':
//     if (!isset($data['login'])) {
//         $smarty->assign('message_login', 'Вы можете авторизоваться');
//     } else {
//         $login = new User($data);
//         if ($login->login()) {
//             $smarty->assign('message_login', 'Успешно');
//         } else {
//             $smarty->assign('message_login', 'Аккаунт или пароль не корректен');
//         }
//     }
//     $smarty->display('user/login.tpl');
//     break;
//
//     case 'logout':
//     logout();
//     header('Location: ?page=user&action=login');
//     break;
//
//     case 'registration':
//     // if (!isset($admin)) {
//     //     $smarty->assign('message', 'администратор');
//     //     $smarty->display('errors/errorAccess.tpl');
//     // }
//     if (!isset($data['registration_user'])) {
//         $smarty->assign('message_registration', 'Введите данные нового пользователя');
//
//         // $admin = new Admin($data);
//         // $admin->createUser();
//     } else {
//         $admin = new Admin($data);
//
//         if ($admin->createUser()) {
//             $smarty->assign('message_registration', 'Успешно');
//         } else {
//             $smarty->assign('message_registration', 'Ошибка');
//         }
//     }
//     // if (loginCheck($data) == 1) {
//     //     $smarty->display('errors/errorLogin.tpl');
//     // } elseif (loginCheck($data) != 'admin') {
//     //     $smarty->assign('message', 'администратор');
//     //     $smarty->display('errors/errorAccess.tpl');
//     // } else {
//     //     if (($_SESSION['logged_user']->user_type) == 2) {
//     //         // if (loginCheck($data) == 'admins') {
//     //         $smarty->assign('message_registration', 'Введите данные нового пользователя');
//     //         if (isset($data['registration_user'])) {
//     //
//     //             // $email = validationForm($data['email']);
//     //
//     //             foreach ($data as $key => $value) {
//     //                 //$value = validationForm($value);
//     //
//     //                 if (empty($value) && ($key != 'user_type')) {
//     //                     $errors[] = $key;
//     //                 }
//     //             }
//     //             if (empty($errors)) {
//     //                 createUser($data);
//     //                 $smarty->assign('message_registration', 'Успешно');
//     //                 header("Location: ".$_SERVER['REQUEST_URI']);
//     //             } else {
//     //                 $errors_list = implode(', ',$errors);
//     //                 $smarty->assign('message_error', 'Введите данные нового пользователя');
//     //                 $smarty->assign('message_registration', $errors_list);
//     //             }
//     //         }
//     //         $allUserInfo = allUserInfo();
//     //         $smarty->assign('all_user_info', $allUserInfo);
//     //         $smarty->display('user/admin/registration.tpl');
//     //         // $smarty->display('user/admin/userList.tpl');
//     //     }
//     // }
//     $allUserInfo = allUserInfo();
//     $smarty->assign('all_user_info', $allUserInfo);
//     $smarty->display('user/admin/registration.tpl');
//     break;
//
//     case 'userinfo':
//     if (loginCheck($data) == 1) {
//         $smarty->display('errors/errorLogin.tpl');
//     } else {
//         userlInfo($data);
//
//         switch ($_SESSION['logged_user']->user_type) {
//             case 0:
//             $smarty->assign('userType', 'пациента');
//             break;
//             case 1:
//             $smarty->assign('userType', 'врача');
//             break;
//             case 2:
//             $smarty->assign('userType', 'администратора');
//             break;
//         }
//         $smarty->assign('email',$_SESSION['logged_user']->email);
//         $smarty->assign('name',$_SESSION['logged_user']->name);
//         $smarty->assign('surname',$_SESSION['logged_user']->surname);
//         $smarty->assign('patronymic',$_SESSION['logged_user']->patronymic);
//         $smarty->assign('date',$_SESSION['logged_user']->date);
//         $smarty->display('user/userInfo.tpl');
//
//         // if (isset($data['changes'])) { ????
//         //
//         // }
//     }
//     break;
// }
?>
