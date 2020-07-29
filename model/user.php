<?php
// function validationForm($str){
//     $str = trim($str);
//     $str = htmlspecialchars($str, ENT_QUOTES);
//     $str = strip_tags($str);
//     return $str;
// }

// function loginCheck($data){
//     if (!isset($_SESSION['logged_user'])) {
//         return 1;
//     }
//     //  else {
//     //     return R::inspect();
//     // }
// }

// function logout(){
//     unset($_SESSION['logged_user']);
// }

// function login($data){
//     $email = validationForm($data['email']);
//     $password = validationForm($data['password']);
//     // $user_type = $data['user_type'];
//
//     // switch ($user_type) {
//     //     case 0:
//     //     $user = R::findOne('patients', 'email = ?', array($email));
//     //     break;
//     //     case 1:
//     //     $user = R::findOne('doctors', 'email = ?', array($email));
//     //     break;
//     //     case 2:
//     //     $user = R::findOne('admins', 'email = ?', array($email));
//     //     break;
//     // }
//
//     $user = R::findOne('users', 'email = ?', array($email));
//
//     if (isset($user)) {
//         if (password_verify($password, $user->password)) {
//             $_SESSION['logged_user'] = $user;
//             return 1;
//         }
//         else {
//             return 0;
//         }
//     } else {
//         return 0;
//     }
// // }
//
// //

// function userlInfo(){
//     $id = $_SESSION['logged_user']->id;
//     $user = R::load('users', $id);
// }

function allUserInfo(){
    return R::findAll('users');
    // $allUsers = array('' => , );
}

// function userInfoChange($data){ ????
//     $userData = array('email' => $data['email'],
//     'password' => $data['password'],
//     'name' => $data['name'],
//     'surname' => $data['surname'],
//     'patronymic' => $data['patronymic'],
//     'date' => $data['date'],
//     'user_type' => $data['user_type']);
//
//     $user = R::dispense( 'users' );
// }

// function registration($data){
//
//
//     if (isset($data['registration_user'])) {
//         $errors = array();
//         if ($data['email'] == '') {
//             $errors[] = 'Введите email';
//         }
//         if ($data['password'] == '') {
//             $errors[] = 'Введите пароль';
//         }
//         if ($data['password_check'] != $data['password']) {
//             $errors[] = 'Повторный пароль введён неверно';
//         }
//         if (($data['name'] == '') OR ($data['surname'] == '')) {
//             $errors[] = 'Поля Имя и Фамилия обязательны для заполнения';
//         }
//         if (R::count('users', 'email = ?', array($data['email'])) > 0) {
//             echo "Пользователь с таким email уже существует";
//         }
//         else {
//             if (empty($errors)) {
//                 $user = R::dispense( 'users' );
//                 $user->email = $data['email'];
//                 $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
//                 $user->name = $data['name'];
//                 $user->surname = $data['surname'];
//                 $user->patronymic = $data['patronymic'];
//                 $user->date = $data['date'];
//                 $user->user_type = $data['user_type'];
//                 R::store( $user );
//                 echo "<p>Успешно</p>";
//             } else {
//                 echo array_shift($errors);
//             }
//         }
//     }
// }

/**
*
*/


// function validationForm($str){
//     $str = trim($str);
//     $str = htmlspecialchars($str, ENT_QUOTES);
//     $str = strip_tags($str);
//     return $str;
// }


// function createUser($data){
//     // $user_type = $data['user_type'];
//
//     $userData = array('user_type' => $data['user_type'],
//     'email' => $data['email'],
//     'password' => $data['password'],
//     'name' => $data['name'],
//     'surname' => $data['surname'],
//     'patronymic' => $data['patronymic'],
//     'date' => $data['date']);
//
//     // switch ($user_type) {
//     //     case 0:
//     //     $user = R::dispense( 'patients' );
//     //     break;
//     //
//     //     case 1:
//     //     $user = R::dispense( 'doctors' );
//     //     break;
//     //
//     //     case 2:
//     //     $user = R::dispense( 'admins' );
//     //     break;
//     // }
//     // R::nuke();
//     $user = R::dispense( 'users' );
//
//     foreach ($userData as $key => $value) {
//         if ($key == 'password') {
//             $user[$key] = password_hash($value, PASSWORD_DEFAULT);
//         } elseif ($key == 'date') {
//             $user[$key] = date_create($value);
//         } else {
//             $user[$key] = $value;
//         }
//     }
//     R::store( $user );
// }


/**
*
*/
class User
{
    protected $userData = array();
    public $errors = array();
    public $userType;

    function __construct($data)
    {
        foreach ($data as $key => &$value) {
            $value = trim($value);
            $value = htmlspecialchars($value, ENT_QUOTES);
            $value = strip_tags($value);
            $value = str_replace(' ', '', $value);
        }
        $this->userData = $data;
    }

    function login() {
        $email = $this->userData['email'];
        $password = $this->userData['password'];

        $users = R::findOne('users', 'email = ?', [$email]);

        if (isset($users)) {
            if (password_verify($password, $users->password)) {
                $_SESSION['logged_user'] = $users;
                // $this->userType = $users->user_type;
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function userInfo(){
        $id = $_SESSION['logged_user']->id;
        $user = R::load('users', $id);
    }

    function createUser(){
        // $info = R::dispense( 'info' );

        // $email = $this->userData['email'];

        // $comments = R::dispense( 'comments' );
        // $posts = R::dispense( 'posts' );

        // $info = R::dispense( 'info' );
        // $users = R::dispense( 'users' );
        //
        // // $patient = $this->postData['id_patient'];
        //
        // $users = R::findOne('users', 'id = 1');
        // $info['user'] = $users;
        // $info['question'] = 'question';
        // $info['last_date'] = date(10,10,10);
        // $info['address'] = 'question';
        // $info['question'] = 222;
        // // $info['user'];
        //
        // foreach ($this->postData as $key => $value) {
        //     // if ($key == 'posts') {
        //
        //     // } else {
        //     $info[$key] = $value;
        //     // }
        // }
        // R::store( $info );
        // return true;

        // if (empty(R::findOne('users', 'email = ?', [$email]))){
        //     foreach ($this->userData as $key => $value) {
        //         if ($key == 'password') {
        //             $user[$key] = password_hash($value, PASSWORD_DEFAULT);
        //         } elseif ($key == 'date') {
        //             $user[$key] = date_create($value);
        //         } else {
        //             $user[$key] = $value;
        //         }
        //     }
        //     R::store( $user );
        //     return true;
        // } else {
        //     return false;
        // }

        $user = R::dispense( 'users' );

        $email = $this->userData['email'];

        if (empty(R::findOne('users', 'email = ?', [$email]))){
            foreach ($this->userData as $key => $value) {
                if ($key == 'password') {
                    $user[$key] = password_hash($value, PASSWORD_DEFAULT);
                } elseif ($key == 'date') {
                    $user[$key] = date_create($value);
                } else {
                    $user[$key] = $value;
                }
            }
            R::store( $user );
            return true;
        } else {
            return false;
        }

        //        foreach ($this->userData as $key => $value) {
        //         if ($key == 'password') {
        //             $user[$key] = password_hash($value, PASSWORD_DEFAULT);
        //         } elseif ($key == 'date') {
        //             $user[$key] = date_create($value);
        //         } else {
        //             $user[$key] = $value;
        //         }
        //        }
        //        R::store( $user );

    }
    // function userlInfo(){
    //     $id = $_SESSION['logged_user']->id;
    //     $user = R::load('users', $id);
    // }


    // function createUser() {
    //     $user = R::dispense( 'users' );
    //
    //     foreach ($this->userData as $key => $value) {
    //         if ($key == 'password') {
    //             $user[$key] = password_hash($value, PASSWORD_DEFAULT);
    //         } elseif ($key == 'date') {
    //             $user[$key] = date_create($value);
    //         } else {
    //             $user[$key] = $value;
    //         }
    //     }
    //     R::store( $user );
    // }
}

/**
*
*/
//class Admin extends User
//{
//    function __construct() {    }
//
//    function createUser($data) {
//        parent::__construct($data);
//
//        // foreach ($this->userData as $key => $value) {
//        //     if (empty($value)) {
//        //         $this->errors[] = $key;
//        //     }
//        // }
//        // // var_dump($this->userData);
//        // if (!empty($this->errors)) {
//        //     // var_dump($this->errors);
//        //     return false;
//        // } else {
//
//        $users = R::dispense( 'users' );
//
//        foreach ($this->userData as $key => $value) {
//            if ($key == 'password') {
//                $users[$key] = password_hash($value, PASSWORD_DEFAULT);
//            } elseif ($key == 'date') {
//                $users[$key] = date_create($value);
//            } else {
//                $users[$key] = $value;
//            }
//        }
//        // var_dump($users);
//        R::store( $users );
//        return true;
//        // }
//    }
//}

// function userlInfo(){
//     $id = $_SESSION['logged_user']->id;
//     $user = R::load('users', $id);
// }
// class Admin extends User
// {
//     // function __construct()
//     // {
//     //
//     // }
//     function createUser(){
//         var_dump($this->userData);
//         // $user = R::dispense( 'users' );
//         //
//         // foreach ($userData as $key => $value) {
//         //     if ($key == 'password') {
//         //         $user[$key] = password_hash($value, PASSWORD_DEFAULT);
//         //     } elseif ($key == 'date') {
//         //         $user[$key] = date_create($value);
//         //     } else {
//         //         $user[$key] = $value;
//         //     }
//         // }
//         // R::store( $user );
//     }
// }


?>
