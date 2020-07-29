<?php
// require_once '././component/db.php';

function typeSelection($userType){
    return R::find('users', 'user_type = ?', [$userType]);
}

function allListPosts(){
    $id = $_SESSION['logged_user']->id;
    return R::findAll('posts', 'patient_id = ?', [$id]);
}

// function createPost($data) {
//     $posts = R::dispense( 'posts' );
//     $posts->hi = 'yes';
//     // // parent::__construct($data);
//     //
//     // // foreach ($this->postData as $key => $value) {
//     // //     if (empty($value)) {
//     // //         $this->errors[] = $key;
//     // //     }
//     // // }
//     //
//     // // if (!empty($this->errors)) {
//     // //     // var_dump($this->errors);
//     // //     return false;
//     // // } else {
//     // if (!R::testConnection()) {
//     //     die('Нет соединения!');
//     // }
//     // $users = R::dispense( 'users' );
//     // $posts = R::dispense( 'posts' );
//     //
//     // $id = $_SESSION['logged_user']->id;
//     //
//     // // $this->postData['id_doctor'] = $id;
//     // // var_dump($this->postData);
//     //
//     // foreach ($data as $key => $value) {
//     //     if ($key == 'id_patient') {
//     //         $users = R::findOne('users', 'id = ?', array($value));
//     //         $posts->patient = $users;
//     //     } elseif ($key == 'id_doctor') {
//     //         $users = R::findOne('users', 'id = ?', array($value));
//     //         $posts->doctor = $users;
//     //     } else {
//     //         $posts->$key = $value;
//     //     }
//     //     // }
//     // }
//     // R::store( $posts );
//     // return true;
//     // // return true;
//     // // }
// // }

class Post
{
    public $postData = array();
    public $errors = array();
    // public $thisPostId;

    function __construct($data)
    {
        // $trash = array_pop($data);

        foreach ($data as $key => &$value) {

            $value = trim($value);
            $value = htmlspecialchars($value, ENT_QUOTES);
            $value = strip_tags($value);

        }
        $this->postData = $data;

        // switch ($_SESSION['logged_user']->user_type) {
        //     case 0:
        //     $this->postData['patient'] = $_SESSION['logged_user']->id;
        //     break;
        //
        //     case 1:
        //     $this->postData['doctor'] = $_SESSION['logged_user']->id;
        //     break;

        // case 2:
        // // code...
        // break;
        // }
        // if ($_SESSION['logged_user']->user_type) {
        //
        // }
        // $this->postData['doctor'] = $_SESSION['logged_user']->id;
        // unset($trash);
    }

    function typeSelection(){
        $userType = 0;
        return R::find('users', 'user_type = ?', [$userType]);
    }

    function getAllPosts(){
        return R::findAll('posts', 'patient_id = ?', [$_SESSION['logged_user']->id]);
    }

    function getOnePost(){
        $post_id = R::findOne('posts', 'ORDER BY patient_id = ? DESC LIMIT 1', [$_SESSION['logged_user']->id]);
        return $post_id->id;
    }

    function createPost(){
        $users = R::dispense( 'users' );
        $posts = R::dispense( 'posts' );

        // $patient = $this->postData['id_patient'];

        $users = R::findOne('users', 'id = ?', [$_SESSION['logged_user']->id]);
        $posts['doctor'] = $users;

        foreach ($this->postData as $key => $value) {
            if ($key == 'patient') {
                $users = R::findOne('users', 'id = ?', array($value));
                $posts[$key] = $users;
            } else {
                $posts[$key] = $value;
            }
        }
        R::store( $posts );
        return true;

        // $comments = R::dispense( 'comments' );
        // $posts = R::dispense( 'posts' );
        //
        // // $patient = $this->postData['id_patient'];
        //
        // $posts = R::findOne('posts', 'id = 1');
        // $comments['post'] = $posts;
        // foreach ($this->postData as $key => $value) {
        //     // if ($key == 'posts') {
        //
        //     // } else {
        //         $comments[$key] = $value;
        //     // }
        // }
        // R::store( $comments );
        // return true;
    }
}


/**
*
*/
// class Doctor extends Post
// {
//     function __construct() {    }
//
//     function typeSelection($userType){
//         return R::find('users', 'user_type = ?', [$userType]);
//     }
//
//     function createPost($data) {
//         parent::__construct($data);
//
//         // foreach ($this->postData as $key => $value) {
//         //     if (empty($value)) {
//         //         $this->errors[] = $key;
//         //     }
//         // }
//         //
//         // if (!empty($this->errors)) {
//         //     // var_dump($this->errors);
//         //     return false;
//         // } else {
//         //     // if (!R::testConnection()) {
//         //     //     die('Нет соединения!');
//         //     // }
//
//         // $users = R::dispense( 'users' );
//         $posts = R::dispense( 'posts' );
//
//         // $id = $_SESSION['logged_user']->id;
//         //
//         // $this->postData['id_doctor'] = $id;
//         // var_dump($this->postData);
//
//         // foreach ($this->postData as $key => $value) {
//         // if ($key == 'id_patient') {
//         //     $users = R::findOne('users', 'id = ?', array($value));
//         //     $posts[$key] = $users;
//         //
//         // } elseif ($key == 'id_doctor') {
//         //     $users = R::findOne('users', 'id = ?', array($value));
//         //     $posts[$key] = $users;
//         //
//         // } else {
//         // $posts[$key] = $value;
//         // }
//         // }
//         // }
//         // var_dump($posts);
//         // return true;
//         // }
//         // R::store( $posts );
//         return true;
//
//     }
// }
//
// /**
// *
// */
// class Patient extends Post
// {
//
//     function __construct() {    }
//
//     function allListPosts(){
//         $id = $_SESSION['logged_user']->id;
//         return R::findAll('posts', 'patient_id = ?', [$id]);
//     }
// }

?>
